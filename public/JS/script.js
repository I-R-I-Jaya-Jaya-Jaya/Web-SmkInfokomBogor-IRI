/* ============================================================
   SMK INFOKOM KOTA BOGOR — Animasi Interaktif (v2, self-contained)
   Vanilla JS, TANPA perlu tambahan HTML atau CSS manual.
   Semua elemen (loader, tombol kembali ke atas) & CSS pendukung
   dibuat otomatis lewat JS. Tinggal tambahkan satu baris ini
   SETELAH <script src="JS/script.js"></script>:

     <script src="JS/animasi-interaktif.js"></script>

   Tiap modul dibungkus try/catch supaya kalau ada satu bagian
   gagal (misal elemen tidak ditemukan), bagian lain tetap jalan.
   ============================================================ */
(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try {
      fn();
    } catch (err) {
      if (window.console && console.warn) {
        console.warn('[animasi-interaktif] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ==========================================================
     0. INJECT CSS — semua style yang dibutuhkan disuntik lewat JS
     supaya tidak perlu edit style.css manual.
     ========================================================== */
  function injectStyles() {
    if (document.getElementById('ai-styles')) return;
    var css =
      '.ai-loader{position:fixed;inset:0;z-index:9999;background:#000A1E;' +
      'display:flex;flex-direction:column;align-items:center;justify-content:center;' +
      'gap:18px;transition:opacity .5s ease,visibility .5s ease;}' +
      '.ai-loader.is-hidden{opacity:0;visibility:hidden;pointer-events:none;}' +
       '.ai-loader-logo{display:flex;align-items:center;justify-content:center;' +
'opacity:0;transform:translateY(10px);' +
'animation:aiLoaderPop .6s ease forwards;}' +
'.ai-loader-logo img{width:110px;height:auto;display:block;' +
'object-fit:contain;}' +
      '.ai-loader-bar{width:160px;height:3px;border-radius:999px;' +
      'background:rgba(255,255,255,.12);overflow:hidden;}' +
      '.ai-loader-bar span{display:block;height:100%;width:0%;background:#F5E707;' +
      'border-radius:999px;animation:aiLoaderFill 1.1s ease forwards .15s;}' +
      '@keyframes aiLoaderPop{to{opacity:1;transform:none;}}' +
      '@keyframes aiLoaderFill{to{width:100%;}}' +
      '.ai-back-to-top{position:fixed;right:20px;bottom:20px;z-index:40;' +
      'width:46px;height:46px;border:none;border-radius:50%;background:#F5E707;' +
      'color:#002147;font-size:18px;font-weight:800;cursor:pointer;' +
      'display:grid;place-items:center;box-shadow:0 10px 25px rgba(0,0,0,.25);' +
      'opacity:0;transform:translateY(14px);pointer-events:none;' +
      'transition:opacity .3s ease,transform .3s ease;}' +
      '.ai-back-to-top.is-visible{opacity:1;transform:none;pointer-events:auto;}' +
      '.ai-back-to-top:hover{transform:translateY(-3px);}' +
      '.ai-reveal{opacity:0;transform:translateY(20px);' +
      'transition:opacity .6s ease,transform .6s ease;}' +
      '.ai-reveal.is-visible{opacity:1;transform:none;}' +
      '@media (prefers-reduced-motion: reduce){' +
      '.ai-loader,.ai-loader-logo,.ai-loader-bar span,.ai-back-to-top,.ai-reveal' +
      '{animation:none!important;transition:none!important;}}';

    var style = document.createElement('style');
    style.id = 'ai-styles';
    style.textContent = css;
    document.head.appendChild(style);
  }

  /* ==========================================================
     1. PAGE LOADER — dibuat otomatis, tidak perlu markup HTML
     ========================================================== */
  function initPageLoader() {
    if (reduced) return;
    if (document.body.getAttribute('data-no-loader') === 'true') return;

    var loader = document.createElement('div');
    loader.className = 'ai-loader';
    loader.innerHTML =
    '<div class="ai-loader-logo">' +
        '<img src="/IMG/logo-infokom.svg" alt="Logo SMK INFOKOM">' +
    '</div>' +
    '<div class="ai-loader-bar">' +
        '<span></span>' +
    '</div>';
    document.body.insertBefore(loader, document.body.firstChild);

    function hide() {
      if (!loader.parentNode) return;
      loader.classList.add('is-hidden');
      window.setTimeout(function () {
        if (loader.parentNode) loader.parentNode.removeChild(loader);
      }, 550);
    }

    var minDelay = new Promise(function (res) { window.setTimeout(res, 700); });
    var pageReady = new Promise(function (res) {
      if (document.readyState === 'complete') { res(); return; }
      window.addEventListener('load', res, { once: true });
    });
    Promise.all([minDelay, pageReady]).then(hide);

    window.setTimeout(hide, 3500);
  }

  /* ==========================================================
     2. HERO ENTRANCE — elemen hero muncul bertahap
     ========================================================== */
  function initHeroEntrance() {
    var hero = document.querySelector('.hero-section, .hero');
    if (!hero || reduced) return;

    var selectors = [
      '.hero-badge',
      '.hero-title',
      '.hero-description',
      '.hero-actions',
      '.hero-features',
      '.hero-tags'
    ];

    var found = [];
    selectors.forEach(function (sel) {
      var el = hero.querySelector(sel);
      if (el && found.indexOf(el) === -1) found.push(el);
    });
    if (!found.length) return;

    found.forEach(function (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity .7s ease, transform .7s ease';
    });

    var startDelay = 250;
    found.forEach(function (el, i) {
      window.setTimeout(function () {
        el.style.opacity = '1';
        el.style.transform = 'none';
      }, startDelay + i * 130);
    });
  }

  /* ==========================================================
     3. COUNTER ANGKA — angka statistik menghitung naik
     ========================================================== */
  function initCounters() {
    var nodes = document.querySelectorAll('.stats-number');
    if (!nodes.length || reduced) return;

    function animate(el) {
      var raw = el.textContent.trim();
      var match = raw.match(/[\d.,]+/);
      if (!match) return;

      var numStr = match[0];
      var cleanNum = numStr.replace(/\./g, '').replace(',', '.');
      var target = parseFloat(cleanNum);
      if (isNaN(target)) return;

      var prefix = raw.slice(0, match.index);
      var suffix = raw.slice(match.index + numStr.length);
      var useThousandDot = target >= 1000;
      var duration = 1100;
      var startTime = null;

      function format(n) {
        var rounded = Math.round(n);
        return useThousandDot ? rounded.toLocaleString('id-ID') : String(rounded);
      }

      function step(ts) {
        if (startTime === null) startTime = ts;
        var progress = Math.min((ts - startTime) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = prefix + format(target * eased) + suffix;
        if (progress < 1) {
          window.requestAnimationFrame(step);
        } else {
          el.textContent = raw;
        }
      }
      window.requestAnimationFrame(step);
    }

    if (!('IntersectionObserver' in window)) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        animate(entry.target);
        io.unobserve(entry.target);
      });
    }, { threshold: 0.5 });

    nodes.forEach(function (el) { io.observe(el); });
  }

  /* ==========================================================
     4. REVEAL BERTAHAP UNTUK GRID KARTU
     Pakai class sendiri (.ai-reveal) supaya tidak bentrok
     dengan sistem .reveal milik script.js.
     ========================================================== */
  function initStaggerGrids() {
    var gridSelectors = [
      '.program-grid > .program-card',
      '.karakter-grid > .karakter-card',
      '.keunggulan-grid > .keunggulan-card',
      '.testimoni-list > .testimoni-card',
      '.jalur-container > .jalur-card',
      '.stats-grid > .stats-card'
    ];

    var items = [];
    gridSelectors.forEach(function (sel) {
      document.querySelectorAll(sel).forEach(function (el, i) {
        el.classList.add('ai-reveal');
        el.style.transitionDelay = reduced ? '0s' : Math.min(i * 90, 450) + 'ms';
        items.push(el);
      });
    });
    if (!items.length) return;

    if (reduced || !('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('is-visible'); });
      return;
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

    items.forEach(function (el) { io.observe(el); });
  }

  /* ==========================================================
     5. PARALLAX HALUS DI HERO
     ========================================================== */
  function initHeroParallax() {
    if (reduced) return;
    var bg = document.querySelector('.hero-bg-image img, .hero-photo img');
    if (!bg) return;

    var ticking = false;
    function update() {
      var move = Math.min(window.scrollY * 0.12, 50);
      bg.style.transform = 'translateY(' + move + 'px) scale(1.06)';
      ticking = false;
    }
    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(update);
        ticking = true;
      }
    }, { passive: true });
    update();
  }

  /* ==========================================================
     6. TOMBOL KEMBALI KE ATAS — dibuat otomatis
     ========================================================== */
  function initBackToTop() {
    var btn = document.createElement('button');
    btn.className = 'ai-back-to-top';
    btn.type = 'button';
    btn.setAttribute('aria-label', 'Kembali ke atas');
    btn.textContent = '↑';
    document.body.appendChild(btn);

    function toggle() {
      btn.classList.toggle('is-visible', window.scrollY > 480);
    }
    window.addEventListener('scroll', toggle, { passive: true });
    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: reduced ? 'auto' : 'smooth' });
    });
    toggle();
  }

  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initPageLoader, 'initPageLoader');
    safe(initHeroEntrance, 'initHeroEntrance');
    safe(initStaggerGrids, 'initStaggerGrids');
    safe(initCounters, 'initCounters');
    safe(initHeroParallax, 'initHeroParallax');
    safe(initBackToTop, 'initBackToTop');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();


document.addEventListener('DOMContentLoaded', function () {
    const playBtn = document.getElementById('playVideoBtn');
    const cover = document.getElementById('videoCover');
    const videoBox = document.getElementById('videoIframe');
    const video = document.getElementById('localVideo');

    playBtn.addEventListener('click', function () {
        // Sembunyikan cover
        cover.style.display = 'none';

        // Tampilkan video
        videoBox.style.display = 'block';

        // Langsung putar
        video.play();
    });
});