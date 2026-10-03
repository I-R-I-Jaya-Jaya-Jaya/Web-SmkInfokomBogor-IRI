document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Dropdown desktop ---------- */
  var groups = document.querySelectorAll('.has-dropdown');

  function closeAll(except) {
    groups.forEach(function (g) {
      if (g === except) return;
      g.classList.remove('open');
      var btn = g.querySelector('.dropdown-toggle');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    });
  }

  groups.forEach(function (g) {
    var btn = g.querySelector('.dropdown-toggle');
    if (!btn) return;

    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = g.classList.toggle('open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      closeAll(g);
    });
  });

  document.addEventListener('click', function () { closeAll(); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeAll();
  });

  /* ---------- Menu mobile ---------- */
  var toggle = document.getElementById('menu-toggle');
  var menu = document.getElementById('mobile-menu');
  var iconOpen = document.getElementById('icon-open');
  var iconClose = document.getElementById('icon-close');

  if (!toggle || !menu) return;

  function setMenu(open) {
    menu.classList.toggle('hidden', !open);
    if (iconOpen) iconOpen.classList.toggle('hidden', open);
    if (iconClose) iconClose.classList.toggle('hidden', !open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Tutup menu navigasi' : 'Buka menu navigasi');
  }

  toggle.addEventListener('click', function () {
    setMenu(menu.classList.contains('hidden'));
  });

  // tutup menu setelah salah satu link diklik (penting untuk link anchor di halaman yang sama)
  menu.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', function () { setMenu(false); });
  });

  // otomatis tutup bila layar diperbesar ke ukuran desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 1024) setMenu(false);
  });
});


/* ============================================================
   2. ANIMASI INTERAKTIF
   Tiap modul dibungkus try/catch supaya kalau satu bagian gagal,
   bagian lain tetap jalan.
   ============================================================ */
(function () {
  'use strict';

  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var html = document.documentElement;

  function safe(fn, label) {
    try {
      fn();
    } catch (err) {
      if (window.console && console.warn) {
        console.warn('[animasi-interaktif] ' + label + ' dilewati:', err.message);
      }
    }
  }

  function wait(ms) {
    return new Promise(function (res) { window.setTimeout(res, ms); });
  }

  /* Jalankan callback setelah overlay terangkat (atau langsung bila tidak ada overlay) */
  function whenRevealed(cb) {
    if (!html.classList.contains('ai-pt')) { cb(); return; }
    document.addEventListener('ai:reveal', function () { cb(); }, { once: true });
  }

  /* ==========================================================
     0. INJECT CSS — style tambahan (back-to-top, reveal kartu)
     ========================================================== */
  function injectStyles() {
    if (document.getElementById('ai-styles')) return;
    var css =
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
      '.ai-back-to-top,.ai-reveal{animation:none!important;transition:none!important;}}';

    var style = document.createElement('style');
    style.id = 'ai-styles';
    style.textContent = css;
    document.head.appendChild(style);
  }

  /* ==========================================================
     1. PAGE TRANSITION
     Alur:
       klik menu -> overlay naik (nama halaman tujuan muncul di
       tengah) -> simpan status -> pindah halaman ->
       halaman baru MASIH tertutup overlay yang sama, progress
       dilanjutkan dari angka terakhir -> overlay terangkat ->
       konten muncul.
     ========================================================== */
  function initPageTransition() {
    var P = window.aiPT;
    var el = document.getElementById('ptr');

    if (P && P.ctrl) return; // sudah diinisialisasi

    // Tanpa overlay / tanpa Web Animations API / reduced motion: lewati dengan aman
    if (!P || !el || reduced || typeof el.animate !== 'function') {
      html.classList.remove('ai-pt');
      document.dispatchEvent(new CustomEvent('ai:reveal'));
      return;
    }
    P.ctrl = true;

    var EASE = 'cubic-bezier(.76,0,.24,1)';
    var ENTER_MS = 680;       // tirai naik menutup halaman lama
    var HOLD_MS = 260;        // jeda agar nama halaman sempat terbaca
    var LEAVE_MS = 900;       // tirai terangkat membuka halaman baru
    var center = el.querySelector('.ptr-center');

    var busy = false;         // sedang berpindah halaman
    var left = false;         // overlay sudah mulai terangkat
    var navTimer = 0;
    var anims = [];

    /* ---------- Progress (animasi halus berbasis waktu) ---------- */
    var loop = { raf: 0, last: 0, target: .9, tau: 800, onDone: null, running: false };

    function tick(now) {
      if (!loop.running) return;
      var dt = Math.min(now - loop.last, 64);
      loop.last = now;
      var np = P.p + (loop.target - P.p) * (1 - Math.exp(-dt / loop.tau));
      if (loop.target >= 1 && np > .994) np = 1;
      P.setP(np);
      if (np >= 1) {
        loop.running = false;
        var cb = loop.onDone;
        loop.onDone = null;
        if (cb) cb();
        return;
      }
      loop.raf = window.requestAnimationFrame(tick);
    }

    function startLoop() {
      if (loop.running) return;
      loop.running = true;
      loop.last = performance.now();
      loop.raf = window.requestAnimationFrame(tick);
    }

    function stopLoop() {
      loop.running = false;
      window.cancelAnimationFrame(loop.raf);
    }

    function track(a) { anims.push(a); return a; }

    function cancelAnims() {
      anims.forEach(function (a) { try { a.cancel(); } catch (e) {} });
      anims = [];
    }

    /* ---------- Overlay terangkat (membuka halaman) ---------- */
    function finishHide() {
      stopLoop();
      cancelAnims();
      html.classList.remove('ai-pt');
      el.classList.remove('is-leaving', 'is-intro');
      busy = false;
      left = true;
    }

    function leave() {
      if (left) return;
      left = true;
      stopLoop();
      P.setP(1);
      el.classList.add('is-leaving');
      document.dispatchEvent(new CustomEvent('ai:reveal'));

      track(center.animate(
        [
          { transform: 'translate3d(0,0,0)', opacity: 1 },
          { transform: 'translate3d(0,-70px,0)', opacity: 0 }
        ],
        { duration: 520, easing: 'cubic-bezier(.5,0,.75,0)', fill: 'forwards' }
      ));

      var a = track(el.animate(
        [
          { transform: 'translateY(0%) translateY(0px)' },
          { transform: 'translateY(-100%) translateY(-90px)' }
        ],
        { duration: LEAVE_MS, easing: EASE, fill: 'forwards' }
      ));
      a.onfinish = finishHide;
      a.oncancel = finishHide;
    }

    /* ---------- Halaman baru terbuka: lanjutkan progress ---------- */
    function arrive() {
      var st = P.state;
      var cont = !!st;
      P.setP(cont ? (st.p || 0) : 0);

      loop.target = .9;
      loop.tau = cont ? 700 : 800;
      loop.onDone = leave;
      startLoop();

      var loaded = new Promise(function (res) {
        if (document.readyState === 'complete') res();
        else window.addEventListener('load', res, { once: true });
      });
      var fonts = (document.fonts && document.fonts.ready)
        ? Promise.race([document.fonts.ready, wait(2500)])
        : Promise.resolve();
      var minShow = wait(cont ? 520 : 1100);

      Promise.race([Promise.all([loaded, fonts, minShow]), wait(5500)]).then(function () {
        loop.target = 1;
        loop.tau = 100;
        startLoop();
      });
    }

    /* ---------- Klik menu: tirai naik menutup halaman ---------- */
    function navigate(url) {
      try {
        sessionStorage.setItem('ai-pt', JSON.stringify({
          t: Date.now(),
          p: P.p,
          eyebrow: 'Menuju halaman',
          title: pendingInfo.title,
          sub: pendingInfo.sub
        }));
      } catch (e) { /* abaikan */ }

      // Bila navigasi gagal / dibatalkan, jangan biarkan layar terkunci
      navTimer = window.setTimeout(function () {
        left = false;
        loop.target = 1;
        loop.tau = 100;
        loop.onDone = leave;
        startLoop();
      }, 10000);

      window.location.assign(url);
    }

    var pendingInfo = { title: '', sub: '' };

    function go(u) {
      if (busy) return;
      busy = true;
      left = false;

      var info = P.resolve(u.href) || { title: 'Halaman berikutnya', sub: '' };
      pendingInfo = info;

      cancelAnims();
      stopLoop();
      P.paint({ eyebrow: 'Menuju halaman', title: info.title, sub: info.sub }, true, 0);

      loop.target = .52;
      loop.tau = 320;
      loop.onDone = null;

      html.classList.add('ai-pt');

      var a = track(el.animate(
        [
          { transform: 'translateY(100%) translateY(90px)' },
          { transform: 'translateY(0%) translateY(0px)' }
        ],
        { duration: ENTER_MS, easing: EASE, fill: 'forwards' }
      ));
      startLoop();

      var covered = new Promise(function (res) { a.onfinish = res; a.oncancel = res; });
      Promise.all([covered, wait(HOLD_MS)]).then(function () { navigate(u.href); });
    }

    /* ---------- Intersep klik link internal ---------- */
    function onClick(e) {
      if (e.defaultPrevented || e.button !== 0) return;
      if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

      var a = e.target.closest ? e.target.closest('a[href]') : null;
      if (!a) return;
      if (a.target && a.target !== '_self') return;
      if (a.hasAttribute('download') || a.hasAttribute('data-no-transition')) return;

      var href = a.getAttribute('href');
      if (!href || /^(#|mailto:|tel:|sms:|javascript:)/i.test(href)) return;

      var u;
      try { u = new URL(a.href, window.location.href); } catch (err) { return; }
      if (u.protocol !== 'http:' && u.protocol !== 'https:') return;
      if (u.origin !== window.location.origin) return;

      // Halaman yang sama: jangan muat ulang
      if (u.pathname === window.location.pathname && u.search === window.location.search) {
        if (!u.hash) {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        return; // ada hash -> scroll anchor bawaan browser
      }

      e.preventDefault();
      go(u);
    }
    document.addEventListener('click', onClick);

    /* ---------- Prefetch saat hover/touch agar pindah halaman lebih cepat ---------- */
    var prefetched = {};
    function prefetch(e) {
      var a = e.target.closest ? e.target.closest('a[href]') : null;
      if (!a) return;
      try {
        var u = new URL(a.href, window.location.href);
        if (u.origin !== window.location.origin) return;
        if (u.pathname === window.location.pathname) return;
        var key = u.pathname + u.search;
        if (prefetched[key]) return;
        prefetched[key] = true;
        var l = document.createElement('link');
        l.rel = 'prefetch';
        l.as = 'document';
        l.href = key;
        document.head.appendChild(l);
      } catch (err) { /* abaikan */ }
    }
    document.addEventListener('pointerover', prefetch, { passive: true });
    document.addEventListener('touchstart', prefetch, { passive: true });

    /* ---------- Interaktif: latar mengikuti gerakan pointer ---------- */
    var mx = 0, my = 0, pmRaf = 0;
    window.addEventListener('pointermove', function (e) {
      if (!html.classList.contains('ai-pt')) return;
      mx = (e.clientX / window.innerWidth - .5) * 2;
      my = (e.clientY / window.innerHeight - .5) * 2;
      if (pmRaf) return;
      pmRaf = window.requestAnimationFrame(function () {
        pmRaf = 0;
        el.style.setProperty('--mx', mx.toFixed(3));
        el.style.setProperty('--my', my.toFixed(3));
      });
    }, { passive: true });

    /* ---------- Tombol Back/Forward (bfcache) ---------- */
    window.addEventListener('pageshow', function (e) {
      if (!e.persisted) return;
      window.clearTimeout(navTimer);
      finishHide();
      document.dispatchEvent(new CustomEvent('ai:reveal'));
    });

    arrive();
  }

  /* ==========================================================
     2. HERO ENTRANCE — elemen hero muncul bertahap
        (menunggu overlay terangkat agar animasinya terlihat)
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

    whenRevealed(function () {
      var startDelay = 280;
      found.forEach(function (el, i) {
        window.setTimeout(function () {
          el.style.opacity = '1';
          el.style.transform = 'none';
        }, startDelay + i * 130);
      });
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
     dengan sistem .reveal milik script lain.
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

    // Mulai mengamati setelah overlay terangkat, supaya kartu yang
    // sudah ada di layar ikut beranimasi dan tidak "terlewat".
    whenRevealed(function () {
      items.forEach(function (el) { io.observe(el); });
    });
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
    safe(initPageTransition, 'initPageTransition');
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


/* ============================================================
   3. VIDEO COVER (halaman home)
   Diberi pengecekan null agar tidak error di halaman lain.
   ============================================================ */
document.addEventListener('DOMContentLoaded', function () {
  var playBtn = document.getElementById('playVideoBtn');
  var cover = document.getElementById('videoCover');
  var videoBox = document.getElementById('videoIframe');
  var video = document.getElementById('localVideo');

  if (!playBtn || !cover || !videoBox || !video) return;

  playBtn.addEventListener('click', function () {
    // Sembunyikan cover
    cover.style.display = 'none';

    // Tampilkan video
    videoBox.style.display = 'block';

    // Langsung putar
    video.play();
  });
});