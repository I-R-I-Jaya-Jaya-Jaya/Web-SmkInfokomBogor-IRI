/* ============================================================
   SMK INFOKOM — Animasi Halaman Galeri
   Modern, ringan, IntersectionObserver + stagger
   ============================================================ */
(function () {
  'use strict';

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try { fn(); }
    catch (err) {
      if (console && console.warn) {
        console.warn('[galeri-animasi] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ---------- Inject CSS ---------- */
  function injectStyles() {
    if (document.getElementById('galeri-anim-styles')) return;

    const css = `
      .ga-reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .7s cubic-bezier(.22,1,.36,1),
                    transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ga-reveal.is-visible {
        opacity: 1;
        transform: none;
      }

      .ga-scale {
        opacity: 0;
        transform: scale(.94);
        transition: opacity .65s ease, transform .65s cubic-bezier(.22,1,.36,1);
      }
      .ga-scale.is-visible {
        opacity: 1;
        transform: none;
      }

      .ga-fade {
        opacity: 0;
        transition: opacity .8s ease;
      }
      .ga-fade.is-visible {
        opacity: 1;
      }

      @media (prefers-reduced-motion: reduce) {
        .ga-reveal, .ga-scale, .ga-fade {
          opacity: 1 !important;
          transform: none !important;
          transition: none !important;
        }
      }
    `;

    const style = document.createElement('style');
    style.id = 'galeri-anim-styles';
    style.textContent = css;
    document.head.appendChild(style);
  }

  /* ---------- Observer helper ---------- */
  function observe(els, options = {}) {
    if (!els.length) return;

    if (reduced || !('IntersectionObserver' in window)) {
      els.forEach(el => el.classList.add('is-visible'));
      return;
    }

    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      });
    }, {
      threshold: options.threshold || 0.12,
      rootMargin: options.rootMargin || '0px 0px -40px 0px'
    });

    els.forEach(el => io.observe(el));
  }

  /* ---------- 1. Hero ---------- */
  function initHero() {
    const hero = document.querySelector('.galeri-hero');
    if (!hero || reduced) return;

    const items = [
      hero.querySelector('.galeri-eyebrow'),
      hero.querySelector('.galeri-hero-title'),
      hero.querySelector('.galeri-hero-desc'),
      hero.querySelector('.galeri-hero-stats')
    ].filter(Boolean);

    items.forEach((el, i) => {
      el.classList.add('ga-reveal');
      el.style.transitionDelay = (i * 100) + 'ms';
    });

    requestAnimationFrame(() => {
      items.forEach(el => el.classList.add('is-visible'));
    });
  }

  /* ---------- 2. Filter chips ---------- */
  function initFilter() {
    const section = document.querySelector('.galeri-filter-section');
    if (!section) return;

    const chips = section.querySelectorAll('.galeri-filter-chip');
    const count = section.querySelector('.galeri-filter-count');

    chips.forEach((el, i) => {
      el.classList.add('ga-reveal');
      el.style.transitionDelay = (i * 50) + 'ms';
    });

    if (count) {
      count.classList.add('ga-reveal');
      count.style.transitionDelay = '280ms';
    }

    observe([...chips, count].filter(Boolean));
  }

  /* ---------- 3. Grid galeri cards ---------- */
  function initGrid() {
    const cards = document.querySelectorAll('.galeri-card');

    cards.forEach((el, i) => {
      el.classList.add('ga-scale');
      el.style.transitionDelay = Math.min(i * 80, 480) + 'ms';
    });

    observe(Array.from(cards), { threshold: 0.1 });
  }

  /* ---------- 4. Video section ---------- */
  function initVideo() {
    const header = document.querySelector('.galeri-video-header');
    const player = document.querySelector('.galeri-video-player');

    if (header) {
      header.classList.add('ga-reveal');
      observe([header]);
    }

    if (player) {
      player.classList.add('ga-scale');
      player.style.transitionDelay = '120ms';
      observe([player], { threshold: 0.15 });
    }
  }

  /* ---------- 5. CTA ---------- */
  function initCta() {
    const section = document.querySelector('.galeri-cta-section');
    if (!section) return;

    const text = section.querySelector('.galeri-cta-text');
    const buttons = section.querySelector('.galeri-cta-buttons');

    if (text) {
      text.classList.add('ga-reveal');
    }
    if (buttons) {
      buttons.classList.add('ga-reveal');
      buttons.style.transitionDelay = '150ms';
    }

    observe([text, buttons].filter(Boolean), { threshold: 0.2 });
  }

  /* ---------- 6. Filter chip active state (opsional) ---------- */
  function initFilterClick() {
    const chips = document.querySelectorAll('.galeri-filter-chip');
    if (!chips.length) return;

    chips.forEach(chip => {
      chip.addEventListener('click', function (e) {
        e.preventDefault();
        chips.forEach(c => c.classList.remove('active'));
        this.classList.add('active');
      });
    });
  }

  /* ---------- 7. Video play (MP4) ---------- */
  function initVideoPlay() {
    const playBtn = document.getElementById('playVideoBtn');
    const cover = document.getElementById('videoCover');
    const videoBox = document.getElementById('videoIframe');
    const video = document.getElementById('localVideo');

    if (!playBtn || !cover || !videoBox || !video) return;

    playBtn.addEventListener('click', function () {
      cover.style.display = 'none';
      videoBox.style.display = 'block';
      video.play();
    });
  }

  /* ---------- Boot ---------- */
  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initHero, 'initHero');
    safe(initFilter, 'initFilter');
    safe(initGrid, 'initGrid');
    safe(initVideo, 'initVideo');
    safe(initCta, 'initCta');
    safe(initFilterClick, 'initFilterClick');
    safe(initVideoPlay, 'initVideoPlay');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();