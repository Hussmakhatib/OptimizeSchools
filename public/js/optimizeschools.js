/* =========================================
   OptimizeSchools – Base JS
   public/js/optimizeschools.js
   ========================================= */

// Helpers
const $ = (sel, ctx=document) => ctx.querySelector(sel);
const $$ = (sel, ctx=document) => Array.from(ctx.querySelectorAll(sel));
const on = (el, ev, fn) => el && el.addEventListener(ev, fn);
const delegate = (root, ev, sel, fn) =>
  on(root, ev, e => { const m = e.target.closest(sel); if (m && root.contains(m)) fn(e, m); });

const ready = (fn) => document.readyState !== 'loading' ? fn() : document.addEventListener('DOMContentLoaded', fn);

// Smooth scroll for anchor links
function enableSmoothScroll() {
  delegate(document, 'click', 'a[href^="#"]', (e, a) => {
    const id = a.getAttribute('href');
    if (id.length > 1) {
      const el = $(id);
      if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    }
  });
}

// Mobile nav toggle
function initMobileNav() {
  const btn = $('[data-nav-toggle]');
  const list = $('.navlinks');
  if (!btn || !list) return;
  on(btn, 'click', () => {
    list.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', list.classList.contains('is-open'));
  });
}

// Accordion
function initAccordion() {
  $$('.accordion').forEach(acc => {
    delegate(acc, 'click', '[data-accordion-button]', (e, btn) => {
      const panel = btn.closest('[data-accordion]').querySelector('[data-accordion-panel]');
      const open = panel.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', open);
    });
  });
}

// Tabs (ARIA)
function initTabs() {
  $$('.tabs').forEach(tabset => {
    const tabs = $$('[role="tab"]', tabset);
    const panels = $$('[role="tabpanel"]', tabset);
    tabs.forEach((t, i) => {
      on(t, 'click', () => {
        tabs.forEach(tt => tt.setAttribute('aria-selected','false'));
        panels.forEach(p => p.hidden = true);
        t.setAttribute('aria-selected','true');
        panels[i].hidden = false;
      });
    });
  });
}

// Modal
function initModals() {
  delegate(document, 'click', '[data-modal-open]', (e, btn) => {
    e.preventDefault();
    const target = btn.getAttribute('data-modal-open');
    const modal = $(target);
    if (modal) modal.classList.add('is-open');
  });
  delegate(document, 'click', '[data-modal-close]', (e, btn) => {
    const modal = btn.closest('.modal');
    if (modal) modal.classList.remove('is-open');
  });
  // click outside to close
  delegate(document, 'click', '.modal', (e, wrap) => {
    if (e.target === wrap) wrap.classList.remove('is-open');
  });
}

// Basic form validation (required fields)
function initForms() {
  $$('form[data-validate]').forEach(form => {
    on(form, 'submit', (e) => {
      let valid = true;
      $$('[required]', form).forEach(inp => {
        const msg = inp.closest('label, .field')?.querySelector('.form-error');
        if (!inp.value.trim()) {
          valid = false;
          inp.setAttribute('aria-invalid','true');
          if (msg) { msg.style.display = 'block'; msg.textContent = 'This field is required.'; }
        } else {
          inp.removeAttribute('aria-invalid');
          if (msg) msg.style.display = 'none';
        }
      });
      if (!valid) e.preventDefault();
    });
  });
}

// Tiny toast
function toast(message, timeout=3000) {
  let el = $('#toast');
  if (!el) {
    el = document.createElement('div');
    el.id = 'toast';
    el.style.position='fixed'; el.style.bottom='18px'; el.style.left='50%';
    el.style.transform='translateX(-50%)'; el.style.background='#0d3b66';
    el.style.color='#fff'; el.style.padding='10px 14px'; el.style.borderRadius='10px';
    el.style.boxShadow='0 8px 30px rgba(0,0,0,.1)'; el.style.zIndex='9999';
    document.body.appendChild(el);
  }
  el.textContent = message;
  el.style.opacity = '1';
  setTimeout(() => el.style.opacity = '0', timeout);
}

// Init all
ready(() => {
  enableSmoothScroll();
  initMobileNav();
  initAccordion();
  initTabs();
  initModals();
  initForms();
  // Example: toast('Welcome to OptimizeSchools');
});
