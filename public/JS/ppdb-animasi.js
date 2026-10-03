/* ============================================================
   SMK INFOKOM — Animasi Halaman PPDB
   Modern, ringan, IntersectionObserver + stagger
   ============================================================ */
(function () {
  'use strict';

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try { fn(); }
    catch (err) {
      if (console && console.warn) {
        console.warn('[ppdb-animasi] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ---------- Inject CSS ---------- */
  function injectStyles() {
    if (document.getElementById('ppdb-anim-styles')) return;

    const css = `
      .ppa-reveal {
        opacity: 0;
        transform: translateY(26px);
        transition: opacity .7s cubic-bezier(.22,1,.36,1),
                    transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ppa-reveal.is-visible {
        opacity: 1;
        transform: none;
      }

      .ppa-scale {
        opacity: 0;
        transform: scale(.95);
        transition: opacity .65s ease, transform .65s cubic-bezier(.22,1,.36,1);
      }
      .ppa-scale.is-visible {
        opacity: 1;
        transform: none;
      }

      .ppa-slide-left {
        opacity: 0;
        transform: translateX(-32px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ppa-slide-left.is-visible {
        opacity: 1;
        transform: none;
      }

      .ppa-slide-right {
        opacity: 0;
        transform: translateX(32px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ppa-slide-right.is-visible {
        opacity: 1;
        transform: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .ppa-reveal, .ppa-scale, .ppa-slide-left, .ppa-slide-right {
          opacity: 1 !important;
          transform: none !important;
          transition: none !important;
        }
      }
    `;

    const style = document.createElement('style');
    style.id = 'ppdb-anim-styles';
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
    const hero = document.querySelector('.ppdb-hero');
    if (!hero || reduced) return;

    const items = [
      hero.querySelector('.ppdb-eyebrow'),
      hero.querySelector('.ppdb-hero-title'),
      hero.querySelector('.ppdb-hero-desc'),
      hero.querySelector('.ppdb-hero-buttons'),
      hero.querySelector('.ppdb-link-whatsapp'),
      hero.querySelector('.ppdb-hero-stats')
    ].filter(Boolean);

    items.forEach((el, i) => {
      el.classList.add('ppa-reveal');
      el.style.transitionDelay = (i * 90) + 'ms';
    });

    requestAnimationFrame(() => {
      items.forEach(el => el.classList.add('is-visible'));
    });
  }

  /* ---------- 2. Banner gelombang ---------- */
  function initBanner() {
    const banner = document.querySelector('.ppdb-banner-gelombang');
    if (!banner) return;

    banner.classList.add('ppa-reveal');
    observe([banner], { threshold: 0.3 });
  }

  /* ---------- 3. Alur pendaftaran ---------- */
  function initAlur() {
    const header = document.querySelector('.ppdb-alur-section .ppdb-section-header');
    const cards = document.querySelectorAll('.ppdb-alur-card');

    if (header) {
      header.classList.add('ppa-reveal');
      observe([header]);
    }

    cards.forEach((el, i) => {
      el.classList.add('ppa-scale');
      el.style.transitionDelay = (i * 100) + 'ms';
    });

    observe(Array.from(cards), { threshold: 0.15 });
  }

  /* ---------- 4. Jalur masuk ---------- */
  function initJalur() {
    const header = document.querySelector('.ppdb-jalur-header');
    const cards = document.querySelectorAll('.ppdb-jalur-card');

    if (header) {
      header.classList.add('ppa-reveal');
      observe([header]);
    }

    cards.forEach((el, i) => {
      el.classList.add('ppa-scale');
      el.style.transitionDelay = (i * 120) + 'ms';
    });

    observe(Array.from(cards), { threshold: 0.15 });
  }

  /* ---------- 5. Syarat + Investasi ---------- */
  function initSyarat() {
    const syarat = document.querySelector('.ppdb-syarat-card');
    const biaya = document.querySelector('.ppdb-biaya-card');

    if (syarat) {
      syarat.classList.add('ppa-slide-left');
      observe([syarat], { threshold: 0.1 });
    }

    if (biaya) {
      biaya.classList.add('ppa-slide-right');
      biaya.style.transitionDelay = '120ms';
      observe([biaya], { threshold: 0.1 });
    }
  }

  /* ---------- 6. Form registrasi ---------- */
  function initForm() {
    const header = document.querySelector('.ppdb-form-header');
    const form = document.querySelector('.ppdb-form');

    if (header) {
      header.classList.add('ppa-reveal');
      observe([header]);
    }

    if (form) {
      form.classList.add('ppa-scale');
      form.style.transitionDelay = '100ms';
      observe([form], { threshold: 0.1 });
    }
  }

  /* ---------- 7. FAQ ---------- */
  function initFaq() {
    const header = document.querySelector('.ppdb-faq-header');
    const items = document.querySelectorAll('.ppdb-faq-item');

    if (header) {
      header.classList.add('ppa-reveal');
      observe([header]);
    }

    items.forEach((el, i) => {
      el.classList.add('ppa-reveal');
      el.style.transitionDelay = (i * 80) + 'ms';
    });

    observe(Array.from(items), { threshold: 0.1 });
  }

  /* ---------- Smooth scroll anchor ---------- */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({
          behavior: reduced ? 'auto' : 'smooth',
          block: 'start'
        });
      });
    });
  }

  /* ---------- Boot ---------- */
  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initHero, 'initHero');
    safe(initBanner, 'initBanner');
    safe(initAlur, 'initAlur');
    safe(initJalur, 'initJalur');
    safe(initSyarat, 'initSyarat');
    safe(initForm, 'initForm');
    safe(initFaq, 'initFaq');
    safe(initSmoothScroll, 'initSmoothScroll');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();   