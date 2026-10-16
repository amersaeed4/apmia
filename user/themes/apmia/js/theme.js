/* APMIA theme — navigation, hero slider, lightbox. No dependencies. */
(function () {
  'use strict';

  var doc = document;
  var body = doc.body;

  /* ---------- Sticky header shadow ---------- */
  var header = doc.getElementById('site-header');
  if (header) {
    var onScroll = function () { header.classList.toggle('is-stuck', window.scrollY > 8); };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- Mobile nav ---------- */
  var toggle = doc.querySelector('.nav-toggle');
  if (toggle) {
    toggle.addEventListener('click', function () {
      var open = body.classList.toggle('nav-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    });
  }
  doc.querySelectorAll('.sub-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.nav-item');
      var open = item.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });
  doc.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      body.classList.remove('nav-open');
      doc.querySelectorAll('.nav-item.is-open').forEach(function (i) { i.classList.remove('is-open'); });
    }
  });

  /* ---------- Hero slider ---------- */
  doc.querySelectorAll('[data-hero]').forEach(function (hero) {
    var slides = [].slice.call(hero.querySelectorAll('.hero-slide'));
    var dots = [].slice.call(hero.querySelectorAll('.hero-dot'));
    if (slides.length < 2) return;
    var index = 0;
    var delay = (parseInt(hero.getAttribute('data-autoplay'), 10) || 0) * 1000;
    var timer = null;
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function go(n) {
      index = (n + slides.length) % slides.length;
      slides.forEach(function (s, i) { s.classList.toggle('is-active', i === index); });
      dots.forEach(function (d, i) { d.classList.toggle('is-active', i === index); });
    }
    function play() { stop(); if (delay && !reduce) timer = setInterval(function () { go(index + 1); }, delay); }
    function stop() { if (timer) { clearInterval(timer); timer = null; } }

    var prev = hero.querySelector('[data-hero-prev]');
    var next = hero.querySelector('[data-hero-next]');
    if (prev) prev.addEventListener('click', function () { go(index - 1); play(); });
    if (next) next.addEventListener('click', function () { go(index + 1); play(); });
    dots.forEach(function (d, i) { d.addEventListener('click', function () { go(i); play(); }); });
    hero.addEventListener('mouseenter', stop);
    hero.addEventListener('mouseleave', play);
    hero.addEventListener('focusin', stop);
    hero.addEventListener('focusout', play);

    var startX = null;
    hero.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
    hero.addEventListener('touchend', function (e) {
      if (startX === null) return;
      var dx = e.changedTouches[0].clientX - startX;
      if (Math.abs(dx) > 50) { go(index + (dx < 0 ? 1 : -1)); play(); }
      startX = null;
    }, { passive: true });

    play();
  });

  /* ---------- Lightbox / album popup ---------- */
  // Every [data-lightbox] container (photo galleries, grids inside page content, single zoomable photos)
  // becomes its own album. Left/right arrows, swipe and the keyboard all navigate.
  var box, boxImg, boxCap, boxCount, links = [], cur = 0;

  function ensureBox() {
    if (box) return;
    box = doc.createElement('div');
    box.className = 'lightbox';
    box.setAttribute('role', 'dialog');
    box.setAttribute('aria-modal', 'true');
    box.setAttribute('aria-label', 'Photo viewer');
    box.innerHTML =
      '<button class="lb-close" type="button" aria-label="Close">&#10005;</button>' +
      '<button class="lb-prev" type="button" aria-label="Previous photo">&#8249;</button>' +
      '<button class="lb-next" type="button" aria-label="Next photo">&#8250;</button>' +
      '<p class="lb-count"></p><img alt=""><p class="lb-cap"></p>';
    body.appendChild(box);
    boxImg = box.querySelector('img');
    boxCap = box.querySelector('.lb-cap');
    boxCount = box.querySelector('.lb-count');
    box.querySelector('.lb-close').addEventListener('click', closeBox);
    box.querySelector('.lb-prev').addEventListener('click', function () { show(cur - 1); });
    box.querySelector('.lb-next').addEventListener('click', function () { show(cur + 1); });
    box.addEventListener('click', function (e) { if (e.target === box) closeBox(); });
    var startX = null;
    box.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
    box.addEventListener('touchend', function (e) {
      if (startX === null) return;
      var dx = e.changedTouches[0].clientX - startX;
      if (Math.abs(dx) > 50 && links.length > 1) show(cur + (dx < 0 ? 1 : -1));
      startX = null;
    }, { passive: true });
    doc.addEventListener('keydown', function (e) {
      if (!box.classList.contains('is-open')) return;
      if (e.key === 'Escape') closeBox();
      if (e.key === 'ArrowLeft') show(cur - 1);
      if (e.key === 'ArrowRight') show(cur + 1);
    });
  }

  function show(n) {
    cur = (n + links.length) % links.length;
    var a = links[cur];
    boxImg.removeAttribute('src');
    boxImg.src = a.getAttribute('href');
    var fig = a.parentNode;
    var c = a.getAttribute('data-caption') || ((fig.querySelector && fig.querySelector('figcaption')) || {}).textContent || '';
    boxImg.alt = c;
    boxCap.textContent = c;
    boxCap.style.display = c ? '' : 'none';
    boxCount.textContent = (cur + 1) + ' / ' + links.length;
    // warm the neighbours so next/previous feels instant
    [cur + 1, cur - 1].forEach(function (i) {
      var l = links[(i + links.length) % links.length];
      if (l) { var im = new Image(); im.src = l.getAttribute('href'); }
    });
  }

  function openBox(list, i) {
    ensureBox();
    links = list;
    box.classList.toggle('is-single', list.length < 2);
    show(i);
    box.classList.add('is-open');
    body.style.overflow = 'hidden';
    box.querySelector('.lb-close').focus();
  }

  function closeBox() {
    box.classList.remove('is-open');
    body.style.overflow = '';
    boxImg.removeAttribute('src');
  }

  doc.querySelectorAll('[data-lightbox]').forEach(function (grid) {
    var list = [].slice.call(grid.querySelectorAll('a[href]'));
    if (!list.length) return;
    list.forEach(function (a, i) {
      a.addEventListener('click', function (e) { e.preventDefault(); openBox(list, i); });
    });
  });
})();
