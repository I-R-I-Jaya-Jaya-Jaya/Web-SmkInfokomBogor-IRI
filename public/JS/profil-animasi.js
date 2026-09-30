/* ============================================================
   SMK INFOKOM — Animasi Halaman Profil
   Modern, ringan, IntersectionObserver + stagger
   ============================================================ */
(function () {
  'use strict';

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try { fn(); }
    catch (err) {
      if (console && console.warn) {
        console.warn('[profil-animasi] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ---------- Inject CSS animasi ---------- */
  function injectStyles() {
    if (document.getElementById('profil-anim-styles')) return;

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

      .pa-fade {
        opacity: 0;
        transition: opacity .8s ease;
      }
      .pa-fade.is-visible {
        opacity: 1;
      }

      .pa-scale {
        opacity: 0;
        transform: scale(.94);
        transition: opacity .65s ease, transform .65s cubic-bezier(.22,1,.36,1);
      }
      .pa-scale.is-visible {
        opacity: 1;
        transform: none;
      }

      .pa-slide-left {
        opacity: 0;
        transform: translateX(-36px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .pa-slide-left.is-visible {
        opacity: 1;
        transform: none;
      }

      .pa-slide-right {
        opacity: 0;
        transform: translateX(36px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .pa-slide-right.is-visible {
        opacity: 1;
        transform: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .pa-reveal, .pa-fade, .pa-scale,
        .pa-slide-left, .pa-slide-right {
          opacity: 1 !important;
          transform: none !important;
          transition: none !important;
        }
      }
    `;

    const style = document.createElement('style');
    style.id = 'profil-anim-styles';
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
      threshold: options.threshold || 0.15,
      rootMargin: options.rootMargin || '0px 0px -40px 0px'
    });

    els.forEach(el => io.observe(el));
  }

  /* ---------- 1. Hero entrance ---------- */
  function initHero() {
    const hero = document.querySelector('.profil-hero');
    if (!hero || reduced) return;

    const items = [
      hero.querySelector('.profil-breadcrumb'),
      hero.querySelector('.profil-label'),
      hero.querySelector('h1'),
      hero.querySelector('.profil-hero-text'),
      hero.querySelector('.profil-stat-grid')
    ].filter(Boolean);

    items.forEach((el, i) => {
      el.classList.add('pa-reveal');
      el.style.transitionDelay = (i * 110) + 'ms';
    });

    // Langsung tampilkan (hero di atas fold)
    requestAnimationFrame(() => {
      items.forEach(el => el.classList.add('is-visible'));
    });
  }

  /* ---------- 2. Sambutan (foto kiri, teks kanan) ---------- */
  function initSambutan() {
    const photo = document.querySelector('.sambutan-photo');
    const content = document.querySelector('.sambutan-content');

    if (photo) {
      photo.classList.add('pa-slide-left');
      observe([photo]);
    }
    if (content) {
      content.classList.add('pa-slide-right');
      content.style.transitionDelay = '120ms';
      observe([content]);
    }
  }

  /* ---------- 3. Visi & Misi ---------- */
  function initVisiMisi() {
    const heading = document.querySelector('.visi-section .section-heading');
    const visiCard = document.querySelector('.visi-card');
    const misiItems = document.querySelectorAll('.misi-item');

    if (heading) {
      heading.classList.add('pa-reveal');
      observe([heading]);
    }

    if (visiCard) {
      visiCard.classList.add('pa-scale');
      visiCard.style.transitionDelay = '100ms';
      observe([visiCard]);
    }

    misiItems.forEach((el, i) => {
      el.classList.add('pa-reveal');
      el.style.transitionDelay = (80 + i * 80) + 'ms';
    });
    observe(Array.from(misiItems));
  }

  /* ---------- 4. Nilai Budaya I-N-F-O-K-O-M ---------- */
  function initNilai() {
    const heading = document.querySelector('.nilai-section .section-heading');
    const cards = document.querySelectorAll('.nilai-card');

    if (heading) {
      heading.classList.add('pa-reveal');
      observe([heading]);
    }

    cards.forEach((el, i) => {
      el.classList.add('pa-scale');
      el.style.transitionDelay = Math.min(i * 60, 360) + 'ms';
    });
    observe(Array.from(cards));
  }

  /* ---------- 5. Sejarah + Timeline ---------- */
  function initSejarah() {
    const photo = document.querySelector('.sejarah-photo');
    const content = document.querySelector('.sejarah-content');
    const items = document.querySelectorAll('.timeline-item');

    if (photo) {
      photo.classList.add('pa-slide-left');
      observe([photo]);
    }
    if (content) {
      content.classList.add('pa-slide-right');
      content.style.transitionDelay = '100ms';
      observe([content]);
    }

    items.forEach((el, i) => {
      el.classList.add('pa-reveal');
      el.style.transitionDelay = (i * 120) + 'ms';
    });
    observe(Array.from(items), { threshold: 0.2 });
  }

  /* ---------- 6. Fasilitas cards ---------- */
  function initFasilitas() {
    const heading = document.querySelector('.fasilitas-section .section-heading');
    const cards = document.querySelectorAll('.fasilitas-card');

    if (heading) {
      heading.classList.add('pa-reveal');
      observe([heading]);
    }

    cards.forEach((el, i) => {
      el.classList.add('pa-reveal');
      el.style.transitionDelay = Math.min(i * 90, 450) + 'ms';
    });
    observe(Array.from(cards));
  }

  /* ---------- 7. Tenaga Pendidik ---------- */
  function initGuru() {
    const heading = document.querySelector('.guru-section .section-heading');
    const cards = document.querySelectorAll('.guru-card');

    if (heading) {
      heading.classList.add('pa-reveal');
      observe([heading]);
    }

    cards.forEach((el, i) => {
      el.classList.add('pa-scale');
      el.style.transitionDelay = Math.min(i * 70, 420) + 'ms';
    });
    observe(Array.from(cards));
  }

  /* ---------- 8. Yuridis ---------- */
  function initYuridis() {
    const box = document.querySelector('.yuridis-box');
    if (!box) return;

    box.classList.add('pa-reveal');
    observe([box], { threshold: 0.2 });
  }

  /* ---------- 9. CTA ---------- */
  function initCta() {
    const box = document.querySelector('.profil-cta .cta-box');
    if (!box) return;

    box.classList.add('pa-scale');
    observe([box], { threshold: 0.25 });
  }

  /* ---------- Boot ---------- */
  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initHero, 'initHero');
    safe(initSambutan, 'initSambutan');
    safe(initVisiMisi, 'initVisiMisi');
    safe(initNilai, 'initNilai');
    safe(initSejarah, 'initSejarah');
    safe(initFasilitas, 'initFasilitas');
    safe(initGuru, 'initGuru');
    safe(initYuridis, 'initYuridis');
    safe(initCta, 'initCta');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();