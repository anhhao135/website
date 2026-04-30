/* =====================================================
   PORTFOLIO — Main Script
   ===================================================== */

// ── Custom Cursor ─────────────────────────────────────
// Skipped on touch-only devices; uses mix-blend-mode:difference
// so it auto-inverts over light vs. dark backgrounds.
(function initCursor() {
  if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

  const el = document.createElement('div');
  el.className = 'cursor';
  document.body.appendChild(el);

  let visible = false;

  document.addEventListener('mousemove', e => {
    el.style.left = e.clientX + 'px';
    el.style.top  = e.clientY + 'px';
    if (!visible) {
      el.style.opacity = '1';
      visible = true;
    }
  });

  document.addEventListener('mouseleave', () => {
    el.style.opacity = '0';
    visible = false;
  });

  // Grow on hover over interactive elements
  function bindInteractive(root) {
    root.querySelectorAll('a, button, [role="button"]').forEach(node => {
      node.addEventListener('mouseenter', () => el.classList.add('hover'));
      node.addEventListener('mouseleave', () => el.classList.remove('hover'));
    });
  }

  bindInteractive(document);

  // Shrink on click
  document.addEventListener('mousedown', () => el.classList.add('click'));
  document.addEventListener('mouseup',   () => el.classList.remove('click'));
})();


// ── Navigation ────────────────────────────────────────
(function initNav() {
  const nav    = document.getElementById('nav');
  const toggle = document.querySelector('.nav-toggle');
  const links  = document.querySelector('.nav-links');
  if (!nav) return;

  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  if (!toggle || !links) return;

  toggle.addEventListener('click', () => {
    const open = toggle.classList.toggle('open');
    links.classList.toggle('open', open);
    document.body.style.overflow = open ? 'hidden' : '';
  });

  links.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      toggle.classList.remove('open');
      links.classList.remove('open');
      document.body.style.overflow = '';
    });
  });
})();


// ── Slideshow ─────────────────────────────────────────
(function initSlideshow() {
  const slides  = document.querySelectorAll('.slide');
  const dots    = document.querySelectorAll('.dot');
  const counter = document.querySelector('.slide-current');
  if (!slides.length) return;

  let current = 0;
  let timer   = null;
  const INTERVAL = 5500;

  function goTo(index) {
    slides[current].classList.remove('active');
    if (dots[current]) dots[current].classList.remove('active');

    current = ((index % slides.length) + slides.length) % slides.length;

    slides[current].classList.add('active');
    if (dots[current]) dots[current].classList.add('active');
    if (counter) counter.textContent = String(current + 1).padStart(2, '0');
  }

  function startTimer() {
    clearInterval(timer);
    timer = setInterval(() => goTo(current + 1), INTERVAL);
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => { goTo(i); startTimer(); });
  });

  const prevBtn = document.querySelector('.slide-prev');
  const nextBtn = document.querySelector('.slide-next');
  if (prevBtn) prevBtn.addEventListener('click', () => { goTo(current - 1); startTimer(); });
  if (nextBtn) nextBtn.addEventListener('click', () => { goTo(current + 1); startTimer(); });

  // Pause on hover so viewers can linger on a piece
  const hero = document.getElementById('hero');
  if (hero) {
    hero.addEventListener('mouseenter', () => clearInterval(timer));
    hero.addEventListener('mouseleave', startTimer);
  }

  // Swipe support
  let touchStart = 0;
  document.addEventListener('touchstart', e => {
    touchStart = e.touches[0].clientX;
  }, { passive: true });
  document.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - touchStart;
    if (Math.abs(dx) > 50) { goTo(current + (dx < 0 ? 1 : -1)); startTimer(); }
  }, { passive: true });

  startTimer();
})();


// ── Image Load Fade-In ────────────────────────────────
// Adds .loaded class once an img has decoded — triggers CSS opacity transition
(function initImages() {
  document.querySelectorAll('img').forEach(img => {
    if (img.complete && img.naturalWidth) {
      img.classList.add('loaded');
    } else {
      img.addEventListener('load', () => img.classList.add('loaded'));
    }
  });
})();


// ── Scroll Reveal ─────────────────────────────────────
(function initReveal() {
  const els = document.querySelectorAll('.reveal');
  if (!els.length || !('IntersectionObserver' in window)) {
    // Fallback: show everything immediately
    els.forEach(el => el.classList.add('visible'));
    return;
  }

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -32px 0px' });

  els.forEach(el => observer.observe(el));
})();


// ── Lightbox ──────────────────────────────────────────
// Opens full-size image when a .work-link[data-full] is clicked.
(function initLightbox() {
  const box   = document.createElement('div');
  box.className = 'lightbox';
  box.innerHTML = '<button class="lightbox-close" aria-label="Close">×</button>'
                + '<img class="lightbox-img" src="" alt="">';
  document.body.appendChild(box);

  const img   = box.querySelector('.lightbox-img');
  const close = box.querySelector('.lightbox-close');

  function open(src, alt) {
    img.src = src;
    img.alt = alt || '';
    box.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function shut() {
    box.classList.remove('open');
    document.body.style.overflow = '';
    img.src = '';
  }

  document.addEventListener('click', e => {
    const link = e.target.closest('.work-link[data-full]');
    if (!link) return;
    e.preventDefault();
    const thumb = link.querySelector('img');
    open(link.dataset.full, thumb ? thumb.alt : '');
  });

  close.addEventListener('click', shut);
  box.addEventListener('click', e => { if (e.target === box) shut(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') shut(); });
})();


// ── Footer Date ───────────────────────────────────────
// Renders "Month YYYY" (e.g. "April 2026") — no hardcoded date
(function initFooterDate() {
  document.querySelectorAll('#footer-date').forEach(el => {
    const now   = new Date();
    const month = now.toLocaleString('default', { month: 'long' });
    el.textContent = `${month} ${now.getFullYear()}`;
  });
})();
