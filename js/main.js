// haole.art · main.js

/* ── Custom cursor ──────────────────────── */
const cur = document.createElement('div');
cur.className = 'cursor';
document.body.appendChild(cur);
document.addEventListener('mousemove', e => {
  cur.style.left = e.clientX + 'px';
  cur.style.top  = e.clientY + 'px';
});
document.addEventListener('mouseover', e => {
  if (e.target.matches('a, button, img.zoomable, .pill')) cur.classList.add('big');
  else cur.classList.remove('big');
});

/* ── Mobile nav toggle ──────────────────── */
const toggle = document.querySelector('.nav-toggle');
const nav    = document.querySelector('.main-nav');
if (toggle && nav) {
  toggle.addEventListener('click', () => nav.classList.toggle('open'));
}

/* ── Scroll reveal ──────────────────────── */
const ro = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      const siblings = [...e.target.parentElement.children];
      const idx = siblings.indexOf(e.target);
      e.target.style.transitionDelay = (idx % 4) * 70 + 'ms';
      e.target.classList.add('visible');
      ro.unobserve(e.target);
    }
  });
}, { threshold: 0.06 });

document.querySelectorAll('.museum-item, .s-item, .else-item, .reveal')
  .forEach(el => ro.observe(el));

/* ── Lightbox ───────────────────────────── */
const lb      = document.getElementById('lightbox');
const lbImg   = document.getElementById('lb-img');
const lbClose = lb?.querySelector('.lightbox-close');

document.querySelectorAll('.museum-img-wrap img, .s-item img').forEach(img => {
  img.classList.add('zoomable');
  img.addEventListener('click', () => {
    lbImg.src = img.src;
    lb.classList.add('open');
    document.body.style.overflow = 'hidden';
  });
});

function closeLb() {
  lb?.classList.remove('open');
  document.body.style.overflow = '';
}
lb?.addEventListener('click', e => { if (e.target === lb) closeLb(); });
lbClose?.addEventListener('click', closeLb);
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLb(); });

/* ── Slideshow (index only) ─────────────── */
const slides = document.querySelectorAll('.slide');
const dotsEl = document.getElementById('ssdots');

if (slides.length && dotsEl) {
  let cur_s = 0, timer;

  slides.forEach((_, i) => {
    const b = document.createElement('button');
    b.setAttribute('aria-label', `Slide ${i + 1}`);
    if (i === 0) b.classList.add('on');
    b.addEventListener('click', () => { clearInterval(timer); goTo(i); start(); });
    dotsEl.appendChild(b);
  });
  const dots = dotsEl.querySelectorAll('button');

  function goTo(n) {
    slides[cur_s].classList.remove('on');
    dots[cur_s]?.classList.remove('on');
    cur_s = (n + slides.length) % slides.length;
    slides[cur_s].classList.add('on');
    dots[cur_s]?.classList.add('on');
  }
  function start() { timer = setInterval(() => goTo(cur_s + 1), 4500); }
  function stop()  { clearInterval(timer); }

  goTo(0);
  start();

  const ss = document.querySelector('.slideshow-wrap');
  ss?.addEventListener('mouseenter', stop);
  ss?.addEventListener('mouseleave', start);

  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowRight') { stop(); goTo(cur_s + 1); start(); }
    if (e.key === 'ArrowLeft')  { stop(); goTo(cur_s - 1); start(); }
  });
}
