/* ============================================================
   SMK INFOKOM — Animasi Halaman Kontak
   Modern, ringan, IntersectionObserver + stagger
   ============================================================ */
(function () {
  'use strict';

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try { fn(); }
    catch (err) {
      if (console && console.warn) {
        console.warn('[kontak-animasi] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ---------- Inject CSS ---------- */
  function injectStyles() {
    if (document.getElementById('kontak-anim-styles')) return;

    const css = `
      .ka-reveal {
        opacity: 0;
        transform: translateY(26px);
        transition: opacity .7s cubic-bezier(.22,1,.36,1),
                    transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ka-reveal.is-visible {
        opacity: 1;
        transform: none;
      }

      .ka-scale {
        opacity: 0;
        transform: scale(.95);
        transition: opacity .65s ease, transform .65s cubic-bezier(.22,1,.36,1);
      }
      .ka-scale.is-visible {
        opacity: 1;
        transform: none;
      }

      .ka-slide-left {
        opacity: 0;
        transform: translateX(-32px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ka-slide-left.is-visible {
        opacity: 1;
        transform: none;
      }

      .ka-slide-right {
        opacity: 0;
        transform: translateX(32px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ka-slide-right.is-visible {
        opacity: 1;
        transform: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .ka-reveal, .ka-scale, .ka-slide-left, .ka-slide-right {
          opacity: 1 !important;
          transform: none !important;
          transition: none !important;
        }
      }
    `;

    const style = document.createElement('style');
    style.id = 'kontak-anim-styles';
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
    const hero = document.querySelector('.kontak-hero');
    if (!hero || reduced) return;

    const items = [
      hero.querySelector('.kontak-eyebrow'),
      hero.querySelector('.kontak-hero-title'),
      hero.querySelector('.kontak-hero-desc'),
      hero.querySelector('.kontak-hero-actions')
    ].filter(Boolean);

    items.forEach((el, i) => {
      el.classList.add('ka-reveal');
      el.style.transitionDelay = (i * 100) + 'ms';
    });

    requestAnimationFrame(() => {
      items.forEach(el => el.classList.add('is-visible'));
    });
  }

  /* ---------- 2. Statistik cepat ---------- */
  function initStats() {
    const cards = document.querySelectorAll('.kontak-stat-card');

    cards.forEach((el, i) => {
      el.classList.add('ka-scale');
      el.style.transitionDelay = (i * 80) + 'ms';
    });

    observe(Array.from(cards), { threshold: 0.2 });
  }

  /* ---------- 3. Info + Form (2 kolom) ---------- */
  function initMain() {
    const infoCol = document.querySelector('.kontak-info-col');
    const formCol = document.querySelector('.kontak-form-col');

    if (infoCol) {
      infoCol.classList.add('ka-slide-left');
      observe([infoCol], { threshold: 0.1 });
    }

    if (formCol) {
      formCol.classList.add('ka-slide-right');
      formCol.style.transitionDelay = '120ms';
      observe([formCol], { threshold: 0.1 });
    }

    // Stagger info cards
    const infoCards = document.querySelectorAll('.kontak-info-card, .kontak-transport-card');
    infoCards.forEach((el, i) => {
      el.classList.add('ka-reveal');
      el.style.transitionDelay = (80 + i * 70) + 'ms';
    });
    observe(Array.from(infoCards));
  }

  /* ---------- 4. Peta ---------- */
  function initMap() {
    const header = document.querySelector('.kontak-map-header');
    const frame = document.querySelector('.kontak-map-frame');

    if (header) {
      header.classList.add('ka-reveal');
      observe([header]);
    }

    if (frame) {
      frame.classList.add('ka-scale');
      frame.style.transitionDelay = '100ms';
      observe([frame], { threshold: 0.15 });
    }
  }

  /* ---------- 5. Fasilitas ---------- */
  function initFasilitas() {
    const text = document.querySelector('.kontak-fasilitas-text');
    const photos = document.querySelector('.kontak-fasilitas-photos');

    if (text) {
      text.classList.add('ka-slide-left');
      observe([text]);
    }

    if (photos) {
      photos.classList.add('ka-slide-right');
      photos.style.transitionDelay = '120ms';
      observe([photos]);
    }
  }

  /* ---------- 6. FAQ ---------- */
  function initFaq() {
    const header = document.querySelector('.kontak-faq-header');
    const items = document.querySelectorAll('.kontak-faq-item');

    if (header) {
      header.classList.add('ka-reveal');
      observe([header]);
    }

    items.forEach((el, i) => {
      el.classList.add('ka-reveal');
      el.style.transitionDelay = (i * 80) + 'ms';
    });

    observe(Array.from(items), { threshold: 0.1 });
  }

  /* ---------- 7. CTA bawah ---------- */
  function initCta() {
    const section = document.querySelector('.kontak-cta-section');
    if (!section) return;

    const text = section.querySelector('.kontak-cta-text');
    const buttons = section.querySelector('.kontak-cta-buttons');

    if (text) text.classList.add('ka-reveal');
    if (buttons) {
      buttons.classList.add('ka-reveal');
      buttons.style.transitionDelay = '150ms';
    }

    observe([text, buttons].filter(Boolean), { threshold: 0.2 });
  }

  /* ---------- Boot ---------- */
  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initHero, 'initHero');
    safe(initStats, 'initStats');
    safe(initMain, 'initMain');
    safe(initMap, 'initMap');
    safe(initFasilitas, 'initFasilitas');
    safe(initFaq, 'initFaq');
    safe(initCta, 'initCta');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();