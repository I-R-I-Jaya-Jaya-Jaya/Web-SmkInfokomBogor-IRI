/* ============================================================
   HALAMAN FASILITAS — SMK INFOKOM KOTA BOGOR
   Simpan sebagai public/JS/fasilitas.js (mandiri, tidak butuh
   animasi-interaktif.js). Isi: reveal saat scroll, counter angka,
   filter + pencarian, modal detail (dengan panah kiri/kanan),
   dan fallback gambar.
   ============================================================ */
(function () {
  'use strict';

  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var finePointer = !!(window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches);

  function $(sel, ctx) { return (ctx || document).querySelector(sel); }
  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || document).querySelectorAll(sel)); }

  var cards = $$('.fas-card');
  /* ---------- 0. Tandai judul section & isi CTA agar ikut animasi reveal ---------- */
  function autoReveal() {
    var groups = '.fas-section-head > *, .fas-journey__head > *, .fas-cta__box > *';
    $$(groups).forEach(function (el, i) {
      if (el.classList.contains('fas-reveal')) return;
      el.classList.add('fas-reveal');
      el.style.setProperty('--i', i % 6);
    });
  }
  autoReveal();

  var reveals = $$('.fas-reveal');

  /* ---------- 1. Reveal saat scroll ---------- */
  function revealAll() {
    reveals.forEach(function (el) { el.classList.add('is-in'); });
  }

  function initReveal() {
    if (reduced || !('IntersectionObserver' in window)) { revealAll(); return; }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-in');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(function (el) { io.observe(el); });
  }

  /* ---------- 2. Counter angka statistik ---------- */
  function initCounters() {
    var nodes = $$('[data-count]');
    if (!nodes.length || reduced || !('IntersectionObserver' in window)) return;

    function animate(el) {
      var target = parseInt(el.getAttribute('data-count'), 10);
      var suffix = el.getAttribute('data-suffix') || '';
      if (isNaN(target)) return;

      var duration = 1200;
      var start = null;

      function format(n) {
        n = Math.round(n);
        return target >= 1000 ? n.toLocaleString('id-ID') : String(n);
      }

      function step(ts) {
        if (start === null) start = ts;
        var p = Math.min((ts - start) / duration, 1);
        var eased = 1 - Math.pow(1 - p, 3);
        el.textContent = format(target * eased) + suffix;
        if (p < 1) window.requestAnimationFrame(step);
      }
      window.requestAnimationFrame(step);
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        animate(entry.target);
        io.unobserve(entry.target);
      });
    }, { threshold: 0.6 });

    nodes.forEach(function (el) { io.observe(el); });
  }

  /* ---------- 3. Fallback gambar (jika foto belum ada / gagal dimuat) ---------- */
  function initFallbacks() {
    $$('img[data-fallback]').forEach(function (img) {
      var box = img.closest('.fas-card__media, .fas-collage__item');

      function fb() { if (box) box.classList.add('img-fallback'); }

      if (img.complete && img.naturalWidth === 0 && img.getAttribute('loading') !== 'lazy') fb();
      else img.addEventListener('error', fb, { once: true });
    });
  }

  /* ---------- 4. Filter + pencarian ---------- */
  var state = { cat: 'all', q: '' };
  var chips = $$('.fas-chip');
  var grid = $('#fas-grid');
  var searchInput = $('#fas-search');
  var emptyBox = $('#fas-empty');
  var statusEl = $('#filter-status');

  function matches(card) {
    var okCat = state.cat === 'all' || card.getAttribute('data-category') === state.cat;
    var okQ = !state.q || (card.getAttribute('data-search') || '').indexOf(state.q) !== -1;
    return okCat && okQ;
  }

  function applyFilter() {
    var k = 0;
    var visible = 0;
    var canFlip = !reduced && typeof Element !== 'undefined' && !!Element.prototype.animate;
    var before = [];

    // FLIP langkah 1: catat posisi kartu yang sedang tampil
    if (canFlip) {
      cards.forEach(function (card) {
        if (!card.hidden) before.push({ card: card, rect: card.getBoundingClientRect() });
      });
    }

    // langkah 2: terapkan perubahan tampilan
    cards.forEach(function (card) {
      var show = matches(card);
      card.hidden = !show;
      if (show) visible++;
    });

    if (grid) grid.classList.toggle('is-filtered', state.cat !== 'all' || state.q !== '');

    // langkah 3: kartu lama bergeser mulus, kartu baru muncul dengan efek pop
    cards.forEach(function (card) {
      if (card.hidden) return;

      card.classList.add('is-in');
      card.classList.remove('is-entering');

      var prev = null;
      before.forEach(function (b) { if (b.card === card) prev = b.rect; });

      if (prev && canFlip) {
        var now = card.getBoundingClientRect();
        var dx = prev.left - now.left;
        var dy = prev.top - now.top;
        if (dx || dy) {
          card.animate(
            [{ transform: 'translate(' + dx + 'px,' + dy + 'px)' }, { transform: 'none' }],
            { duration: 520, easing: 'cubic-bezier(.2,.8,.2,1)' }
          );
        }
      } else {
        void card.offsetWidth; // restart animasi
        card.style.setProperty('--k', k++);
        card.classList.add('is-entering');
      }
    });
    if (emptyBox) emptyBox.hidden = visible !== 0;
    if (statusEl) statusEl.textContent = 'Menampilkan ' + visible + ' fasilitas.';

    chips.forEach(function (chip) {
      var on = chip.getAttribute('data-filter') === state.cat;
      chip.classList.toggle('is-active', on);
      chip.setAttribute('aria-pressed', on ? 'true' : 'false');
    });
  }

  function initFilter() {
    if (!cards.length) return;

    chips.forEach(function (chip) {
      chip.addEventListener('click', function () {
        state.cat = chip.getAttribute('data-filter') || 'all';
        applyFilter();
        chip.scrollIntoView({ behavior: reduced ? 'auto' : 'smooth', inline: 'center', block: 'nearest' });
      });
    });

    if (searchInput) {
      var timer = null;
      searchInput.addEventListener('input', function () {
        window.clearTimeout(timer);
        timer = window.setTimeout(function () {
          state.q = searchInput.value.trim().toLowerCase();
          applyFilter();
        }, 120);
      });
    }

    // Tautan langsung, contoh: /fasilitas?kategori=studio
    var initial = new URLSearchParams(window.location.search).get('kategori');
    if (initial && chips.some(function (c) { return c.getAttribute('data-filter') === initial; })) {
      state.cat = initial;
      applyFilter();
    }
  }

  /* ---------- 5. Modal detail ---------- */
  var modal = $('#fas-modal');
  var currentCard = null;

  function visibleCards() {
    return cards.filter(function (c) { return !c.hidden; });
  }

  function setText(id, value) {
    var el = document.getElementById(id);
    if (el) el.textContent = value || '';
  }

  function fillModal(card) {
    currentCard = card;

    // restart animasi masuk modal setiap isi berganti
    var gridEl = $('.fas-modal__grid', modal);
    if (gridEl) {
      gridEl.classList.remove('is-anim');
      void gridEl.offsetWidth;
      gridEl.classList.add('is-anim');
    }

    var img = $('#fas-modal-img');
    var media = $('.fas-modal__media', modal);
    var icon = $('#fas-modal-icon');

    if (img && media) {
      media.classList.remove('img-fallback');
      img.onerror = function () { media.classList.add('img-fallback'); };
      img.src = card.getAttribute('data-img') || '';
      img.alt = card.getAttribute('data-title') || '';
    }
    if (icon) icon.src = card.getAttribute('data-icon') || '';

    setText('fas-modal-cat', card.getAttribute('data-cat'));
    setText('fas-modal-tag', card.getAttribute('data-tag'));
    setText('fas-modal-title', card.getAttribute('data-title'));
    setText('fas-modal-desc', card.getAttribute('data-desc'));
    setText('fas-modal-meta-label', card.getAttribute('data-meta-label'));
    setText('fas-modal-meta', card.getAttribute('data-meta'));
    setText('fas-modal-sorotan', card.getAttribute('data-sorotan'));

    var list = visibleCards();
    setText('fas-modal-counter', (list.indexOf(card) + 1) + ' / ' + list.length);
  }

  function openModal(card) {
    fillModal(card);
    if (typeof modal.showModal === 'function') {
      if (!modal.open) modal.showModal();
    } else {
      modal.setAttribute('open', '');
    }
    document.documentElement.classList.add('fas-lock');
  }

  function closeModal() {
    if (typeof modal.close === 'function') modal.close();
    else modal.removeAttribute('open');
    document.documentElement.classList.remove('fas-lock');
  }

  function stepModal(dir) {
    var list = visibleCards();
    if (!list.length || !currentCard) return;
    var i = list.indexOf(currentCard);
    if (i === -1) i = 0;
    fillModal(list[(i + dir + list.length) % list.length]);
  }

  function initModal() {
    if (!modal) return;

    cards.forEach(function (card) {
      var btn = $('.fas-card__open', card);
      if (btn) btn.addEventListener('click', function () { openModal(card); });
    });

    $$('[data-close]', modal).forEach(function (el) {
      el.addEventListener('click', closeModal);
    });

    var prev = $('#fas-prev');
    var next = $('#fas-next');
    if (prev) prev.addEventListener('click', function () { stepModal(-1); });
    if (next) next.addEventListener('click', function () { stepModal(1); });

    // klik area gelap di luar kotak = tutup
    modal.addEventListener('click', function (e) {
      if (e.target === modal) closeModal();
    });

    modal.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') { e.preventDefault(); stepModal(1); }
      if (e.key === 'ArrowLeft')  { e.preventDefault(); stepModal(-1); }
    });

    modal.addEventListener('close', function () {
      document.documentElement.classList.remove('fas-lock');
    });
  }

  /* ---------- 6. Progress bar scroll ---------- */
  function initProgress() {
    var bar = $('.fas-progress span');
    if (!bar || reduced) return;

    var ticking = false;

    function update() {
      var max = document.documentElement.scrollHeight - window.innerHeight;
      var p = max > 0 ? Math.min(window.scrollY / max, 1) : 0;
      bar.style.transform = 'scaleX(' + p.toFixed(4) + ')';
      ticking = false;
    }

    window.addEventListener('scroll', function () {
      if (!ticking) { window.requestAnimationFrame(update); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', update);
    update();
  }

  /* ---------- 7. Hero: cahaya mengikuti kursor + kolase miring 3D ---------- */
  function initHeroMotion() {
    var hero = $('.fas-hero');
    var collage = $('.fas-collage');
    if (!hero || reduced || !finePointer) return;

    var raf = null;

    hero.addEventListener('pointermove', function (e) {
      var r = hero.getBoundingClientRect();
      var x = (e.clientX - r.left) / r.width;
      var y = (e.clientY - r.top) / r.height;
      if (raf) return;

      raf = window.requestAnimationFrame(function () {
        raf = null;
        hero.style.setProperty('--gx', (x * 100).toFixed(1) + '%');
        hero.style.setProperty('--gy', (y * 100).toFixed(1) + '%');
        if (collage) {
          collage.style.setProperty('--ry', ((x - 0.5) * 14).toFixed(2) + 'deg');
          collage.style.setProperty('--rx', ((0.5 - y) * 10).toFixed(2) + 'deg');
          collage.style.setProperty('--mx', ((x - 0.5) * 2).toFixed(3));
          collage.style.setProperty('--my', ((y - 0.5) * 2).toFixed(3));
        }
      });
    });

    hero.addEventListener('pointerleave', function () {
      if (!collage) return;
      collage.style.setProperty('--rx', '0deg');
      collage.style.setProperty('--ry', '0deg');
      collage.style.setProperty('--mx', '0');
      collage.style.setProperty('--my', '0');
    });
  }

  /* ---------- 8. Kartu: miring 3D + kilau mengikuti kursor ---------- */
  function initCardTilt() {
    if (reduced || !finePointer) return;

    cards.forEach(function (card) {
      var raf = null;

      card.addEventListener('pointerenter', function () { card.classList.add('is-tilting'); });

      card.addEventListener('pointermove', function (e) {
        var r = card.getBoundingClientRect();
        var x = e.clientX - r.left;
        var y = e.clientY - r.top;
        if (raf) return;

        raf = window.requestAnimationFrame(function () {
          raf = null;
          card.style.setProperty('--mx', x.toFixed(0) + 'px');
          card.style.setProperty('--my', y.toFixed(0) + 'px');
          card.style.setProperty('--ry', ((x / r.width - 0.5) * 8).toFixed(2) + 'deg');
          card.style.setProperty('--rx', (-(y / r.height - 0.5) * 8).toFixed(2) + 'deg');
        });
      });

      card.addEventListener('pointerleave', function () {
        card.classList.remove('is-tilting');
        card.style.setProperty('--rx', '0deg');
        card.style.setProperty('--ry', '0deg');
      });
    });
  }

  /* ---------- 9. Tombol magnetik ---------- */
  function initMagnetic() {
    if (reduced || !finePointer) return;

    $$('.fas-btn--primary, .fas-btn--ghost').forEach(function (btn) {
      btn.addEventListener('pointermove', function (e) {
        var r = btn.getBoundingClientRect();
        var dx = (e.clientX - (r.left + r.width / 2)) * 0.25;
        var dy = (e.clientY - (r.top + r.height / 2)) * 0.35;
        btn.style.setProperty('--bx', dx.toFixed(1) + 'px');
        btn.style.setProperty('--by', dy.toFixed(1) + 'px');
      });

      btn.addEventListener('pointerleave', function () {
        btn.style.setProperty('--bx', '0px');
        btn.style.setProperty('--by', '0px');
      });
    });
  }

  /* ---------- Jalankan ---------- */
  function safe(fn, fallback) {
    try { fn(); }
    catch (err) {
      if (window.console && console.warn) console.warn('[fasilitas] ' + err.message);
      if (fallback) fallback();
    }
  }

  function boot() {
    safe(initReveal, revealAll); // paling awal: pastikan konten tidak tetap tersembunyi
    safe(initFallbacks);
    safe(initCounters);
    safe(initFilter);
    safe(initModal);
    safe(initProgress);
    safe(initHeroMotion);
    safe(initCardTilt);
    safe(initMagnetic);
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();