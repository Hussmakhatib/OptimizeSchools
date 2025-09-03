/* ===========================
   One-Page Slider Helpers
   =========================== */
const $ = (s, ctx=document) => ctx.querySelector(s);
const $$ = (s, ctx=document) => Array.from(ctx.querySelectorAll(s));

document.addEventListener('DOMContentLoaded', () => {
  const headerH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--header-h')) || 125;
  const sections = $$('.section[id]');
  const navLinks = $$('.navlinks a[href^="#"]');
  const slider = $('.slider');

  /* 1) Smooth anchor navigation (with header offset safety for browsers ignoring scroll-padding) */
  navLinks.forEach(a => {
    a.addEventListener('click', (e) => {
      const id = a.getAttribute('href');
      if (!id.startsWith('#')) return;
      const target = $(id);
      if (!target) return;
      e.preventDefault();

      const top = target.getBoundingClientRect().top + window.scrollY - headerH + 1;
      window.scrollTo({ top, behavior: 'smooth' });

      // If slider container is used (recommended), scroll it instead of window:
      if (slider && slider.contains(target)) {
        const y = target.offsetTop; // inside slider
        slider.scrollTo({ top: y, behavior: 'smooth' });
      }
      history.replaceState(null, '', id);
    });
  });

  /* 2) Highlight active nav link while scrolling */
  const byId = link => link.getAttribute('href');
  const setActive = (id) => {
    navLinks.forEach(a => a.classList.toggle('is-active', byId(a) === id));
    // a11y hint
    navLinks.forEach(a => a.removeAttribute('aria-current'));
    const active = navLinks.find(a => byId(a) === id);
    if (active) active.setAttribute('aria-current', 'page');
  };

  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        setActive('#' + entry.target.id);
      }
    });
  }, { root: slider || null, threshold: 0.6 });
  sections.forEach(sec => io.observe(sec));

  /* 3) Optional: snap assist on wheel for older browsers (kept subtle) */
  let lock = false;
  const snapTo = (dir) => {
    if (lock) return; lock = true;
    const current = sections.find(s => s.classList.contains('is-current')) ||
                    sections.reduce((closest, s) => {
                      const b = s.getBoundingClientRect();
                      return (Math.abs(b.top - headerH) < Math.abs((closest?.getBoundingClientRect().top ?? Infinity) - headerH)) ? s : closest;
                    }, null);

    const idx = sections.indexOf(current);
    const nextIdx = Math.min(sections.length - 1, Math.max(0, idx + dir));
    const target = sections[nextIdx];
    if (target && target !== current) {
      (slider || window).scrollTo({ top: (slider ? target.offsetTop : target.offsetTop + window.scrollY - headerH), behavior: 'smooth' });
      setActive('#' + target.id);
    }
    setTimeout(() => (lock = false), 450);
  };

  // Mark current via IO callback by toggling class
  const io2 = new IntersectionObserver((entries) => {
    entries.forEach(e => e.target.classList.toggle('is-current', e.isIntersecting));
  }, { root: slider || null, threshold: 0.6 });
  sections.forEach(sec => io2.observe(sec));

  // Only enable snap assist if user is scrolling inside the slider
  (slider || window).addEventListener('wheel', (e) => {
    if (!e.ctrlKey && Math.abs(e.deltaY) > 28) {
      // Allow normal free scroll; uncomment for stronger snapping:
      // snapTo(e.deltaY > 0 ? +1 : -1);
    }
  }, { passive: true });
});
