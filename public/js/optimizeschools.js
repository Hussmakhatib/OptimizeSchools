/* ===========================
   One-Page Slider Helpers (slider-only scroll)
   =========================== */
const $ = (s, ctx=document) => ctx.querySelector(s);
const $$ = (s, ctx=document) => Array.from(ctx.querySelectorAll(s));

document.addEventListener('DOMContentLoaded', () => {
  const slider   = $('.slider');                  // the ONLY scrollable container
  const sections = $$('.section[id]', slider);    // all sections live inside slider
  const navLinks = $$('.navlinks a[href^="#"]');

  if (!slider || sections.length === 0) return;

  /* 1) Smooth anchor navigation INTO the slider (never scroll the window) */
  navLinks.forEach(a => {
    a.addEventListener('click', (e) => {
      const id = a.getAttribute('href');
      if (!id || !id.startsWith('#')) return;
      const target = $(id, slider) || document.querySelector(id);
      if (!target) return;

      e.preventDefault();

      // Scroll INSIDE the slider only (so header never overlaps)
      slider.scrollTo({ top: target.offsetTop, behavior: 'smooth' });

      // Update URL fragment without jumping
      history.replaceState(null, '', id);
    });
  });

  /* 2) Highlight active nav item while scrolling the slider */
  const href = (link) => link.getAttribute('href');
  const setActive = (id) => {
    navLinks.forEach(a => {
      const match = href(a) === id;
      a.classList.toggle('is-active', match);
      if (match) a.setAttribute('aria-current', 'page'); else a.removeAttribute('aria-current');
    });
  };

  // Observe which section is most visible inside the slider
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      entry.target.classList.toggle('is-current', entry.isIntersecting);
      if (entry.isIntersecting) setActive('#' + entry.target.id);
    });
  }, { root: slider, threshold: 0.6 });

  sections.forEach(sec => io.observe(sec));

  /* 3) (Optional) gentle snap assist for older browsers
        Leave disabled by default—enable by uncommenting the snapTo() call below. */
  let snapping = false;
  const snapTo = (dir) => {
    if (snapping) return;
    snapping = true;

    // Find currently most centered section
    const mid = slider.scrollTop + slider.clientHeight / 2;
    let currentIdx = 0, bestDist = Infinity;
    sections.forEach((s, i) => {
      const top = s.offsetTop, bottom = top + s.offsetHeight;
      const center = (top + bottom) / 2;
      const dist = Math.abs(center - mid);
      if (dist < bestDist) { bestDist = dist; currentIdx = i; }
    });

    const nextIdx = Math.min(sections.length - 1, Math.max(0, currentIdx + dir));
    slider.scrollTo({ top: sections[nextIdx].offsetTop, behavior: 'smooth' });
    setTimeout(() => (snapping = false), 450);
  };

  // Wheel handler inside slider (disabled by default)
  slider.addEventListener('wheel', (e) => {
    if (!e.ctrlKey && Math.abs(e.deltaY) > 28) {
      // Uncomment to enforce one-section-at-a-time scrolling:
      // e.preventDefault();
      // snapTo(e.deltaY > 0 ? +1 : -1);
    }
  }, { passive: true });
});
