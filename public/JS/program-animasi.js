/* ============================================================
   SMK INFOKOM — Animasi Halaman Program Keahlian
   Modern, ringan, IntersectionObserver + stagger
   ============================================================ */
(function () {
  'use strict';

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try { fn(); }
    catch (err) {
      if (console && console.warn) {
        console.warn('[program-animasi] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ---------- Inject CSS ---------- */
  function injectStyles() {
    if (document.getElementById('program-anim-styles')) return;

    const css = `
      .pa-reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .7s cubic-bezier(.22,1,.36,1),
                    transform .7s cubic-bezier(.22,1,.36,1);
      }
      .pa-reveal.is-visible {
        opacity: 1;
        transform: none;
      }

      .pa-scale {
        opacity: 0;
        transform: scale(.95);
        transition: opacity .65s ease, transform .65s cubic-bezier(.22,1,.36,1);
      }
      .pa-scale.is-visible {
        opacity: 1;
        transform: none;
      }

      .pa-slide-left {
        opacity: 0;
        transform: translateX(-40px);
        transition: opacity .75s ease, transform .75s cubic-bezier(.22,1,.36,1);
      }
      .pa-slide-left.is-visible {
        opacity: 1;
        transform: none;
      }

      .pa-slide-right {
        opacity: 0;
        transform: translateX(40px);
        transition: opacity .75s ease, transform .75s cubic-bezier(.22,1,.36,1);
      }
      .pa-slide-right.is-visible {
        opacity: 1;
        transform: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .pa-reveal, .pa-scale, .pa-slide-left, .pa-slide-right {
          opacity: 1 !important;
          transform: none !important;
          transition: none !important;
        }
      }
    `;

    const style = document.createElement('style');
    style.id = 'program-anim-styles';
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
      rootMargin: options.rootMargin || '0px 0px -50px 0px'
    });

    els.forEach(el => io.observe(el));
  }

  /* ---------- 1. Hero ---------- */
  function initHero() {
    const hero = document.querySelector('.program-hero');
    if (!hero || reduced) return;

    const items = [
      hero.querySelector('.program-label'),
      hero.querySelector('.program-hero-text h1'),
      hero.querySelector('.program-hero-text p'),
      hero.querySelector('.program-tabs')
    ].filter(Boolean);

    items.forEach((el, i) => {
      el.classList.add('pa-reveal');
      el.style.transitionDelay = (i * 100) + 'ms';
    });

    requestAnimationFrame(() => {
      items.forEach(el => el.classList.add('is-visible'));
    });
  }

  /* ---------- 2. Setiap Jurusan Card (RPL, TKJ, DKV, PSPT) ---------- */
  function initJurusanCards() {
    const cards = document.querySelectorAll('.jurusan-card');

    cards.forEach((card) => {
      const image = card.querySelector('.jurusan-image');
      const content = card.querySelector('.jurusan-content');
      const isReverse = card.classList.contains('reverse');

      if (image) {
        image.classList.add(isReverse ? 'pa-slide-right' : 'pa-slide-left');
      }
      if (content) {
        content.classList.add(isReverse ? 'pa-slide-left' : 'pa-slide-right');
        content.style.transitionDelay = '120ms';
      }

      // Kompetensi items stagger
      const items = card.querySelectorAll('.kompetensi-item');
      items.forEach((el, i) => {
        el.classList.add('pa-reveal');
        el.style.transitionDelay = (180 + i * 80) + 'ms';
      });

      // Tech stack & prospek
      const tech = card.querySelector('.tech-stack');
      const prospek = card.querySelector('.prospek');
      if (tech) {
        tech.classList.add('pa-reveal');
        tech.style.transitionDelay = '450ms';
      }
      if (prospek) {
        prospek.classList.add('pa-reveal');
        prospek.style.transitionDelay = '520ms';
      }

      // Observe semua elemen di card ini
      const toObserve = [image, content, ...items, tech, prospek].filter(Boolean);
      observe(toObserve, { threshold: 0.1 });
    });
  }

  /* ---------- 3. Tabel Komparasi ---------- */
  function initKomparasi() {
    const heading = document.querySelector('.komparasi-section .section-heading');
    const table = document.querySelector('.komparasi-table');

    if (heading) {
      heading.classList.add('pa-reveal');
      observe([heading]);
    }

    if (table) {
      const rows = table.querySelectorAll('tbody tr');
      rows.forEach((row, i) => {
        row.classList.add('pa-reveal');
        row.style.transitionDelay = (i * 90) + 'ms';
      });
      observe(Array.from(rows), { threshold: 0.15 });
    }
  }

  /* ---------- 4. Alur 3 Tahun ---------- */
  function initAlur() {
    const heading = document.querySelector('.alur-section .section-heading');
    const cards = document.querySelectorAll('.alur-card');

    if (heading) {
      heading.classList.add('pa-reveal');
      observe([heading]);
    }

    cards.forEach((el, i) => {
      el.classList.add('pa-scale');
      el.style.transitionDelay = (i * 120) + 'ms';
    });
    observe(Array.from(cards), { threshold: 0.2 });
  }

  /* ---------- 5. CTA ---------- */
  function initCta() {
    const box = document.querySelector('.program-cta .cta-box');
    if (!box) return;

    const left = box.querySelector('.cta-left');
    const right = box.querySelector('.cta-right');

    if (left) {
      left.classList.add('pa-slide-left');
    }
    if (right) {
      right.classList.add('pa-slide-right');
      right.style.transitionDelay = '150ms';
    }

    observe([left, right].filter(Boolean), { threshold: 0.2 });
  }

  /* ---------- Smooth scroll untuk tab ---------- */
  function initSmoothTabs() {
    document.querySelectorAll('.program-tabs a[href^="#"]').forEach(link => {
      link.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        target.scrollIntoView({ behavior: reduced ? 'auto' : 'smooth', block: 'start' });
      });
    });
  }

  /* ---------- Boot ---------- */
  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initHero, 'initHero');
    safe(initJurusanCards, 'initJurusanCards');
    safe(initKomparasi, 'initKomparasi');
    safe(initAlur, 'initAlur');
    safe(initCta, 'initCta');
    safe(initSmoothTabs, 'initSmoothTabs');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();