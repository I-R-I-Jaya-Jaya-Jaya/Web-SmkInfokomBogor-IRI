/* ============================================================
   SMK INFOKOM — Animasi Halaman Berita
   Modern, ringan, IntersectionObserver + stagger
   ============================================================ */
(function () {
  'use strict';

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function safe(fn, label) {
    try { fn(); }
    catch (err) {
      if (console && console.warn) {
        console.warn('[berita-animasi] ' + label + ' dilewati:', err.message);
      }
    }
  }

  /* ---------- Inject CSS ---------- */
  function injectStyles() {
    if (document.getElementById('berita-anim-styles')) return;

    const css = `
      .ba-reveal {
        opacity: 0;
        transform: translateY(26px);
        transition: opacity .7s cubic-bezier(.22,1,.36,1),
                    transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ba-reveal.is-visible {
        opacity: 1;
        transform: none;
      }

      .ba-scale {
        opacity: 0;
        transform: scale(.95);
        transition: opacity .65s ease, transform .65s cubic-bezier(.22,1,.36,1);
      }
      .ba-scale.is-visible {
        opacity: 1;
        transform: none;
      }

      .ba-slide-left {
        opacity: 0;
        transform: translateX(-30px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ba-slide-left.is-visible {
        opacity: 1;
        transform: none;
      }

      .ba-slide-right {
        opacity: 0;
        transform: translateX(30px);
        transition: opacity .7s ease, transform .7s cubic-bezier(.22,1,.36,1);
      }
      .ba-slide-right.is-visible {
        opacity: 1;
        transform: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .ba-reveal, .ba-scale, .ba-slide-left, .ba-slide-right {
          opacity: 1 !important;
          transform: none !important;
          transition: none !important;
        }
      }
    `;

    const style = document.createElement('style');
    style.id = 'berita-anim-styles';
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
    const hero = document.querySelector('.berita-hero');
    if (!hero || reduced) return;

    const items = [
      hero.querySelector('.berita-hero-top'),
      hero.querySelector('.berita-hero-title'),
      hero.querySelector('.berita-hero-desc'),
      hero.querySelector('.berita-search-form')
    ].filter(Boolean);

    items.forEach((el, i) => {
      el.classList.add('ba-reveal');
      el.style.transitionDelay = (i * 100) + 'ms';
    });

    requestAnimationFrame(() => {
      items.forEach(el => el.classList.add('is-visible'));
    });
  }

  /* ---------- 2. Filter chips ---------- */
  function initFilter() {
    const chips = document.querySelectorAll('.berita-filter-chip');
    if (!chips.length) return;

    chips.forEach((el, i) => {
      el.classList.add('ba-reveal');
      el.style.transitionDelay = (i * 50) + 'ms';
    });

    observe(Array.from(chips));

    // Active state
    chips.forEach(chip => {
      chip.addEventListener('click', function (e) {
        e.preventDefault();
        chips.forEach(c => c.classList.remove('active'));
        this.classList.add('active');
      });
    });
  }

  /* ---------- 3. Featured berita ---------- */
  function initFeatured() {
    const featured = document.querySelector('.berita-featured');
    if (!featured) return;

    const image = featured.querySelector('.berita-featured-image');
    const content = featured.querySelector('.berita-featured-content');

    if (image) {
      image.classList.add('ba-slide-left');
    }
    if (content) {
      content.classList.add('ba-slide-right');
      content.style.transitionDelay = '120ms';
    }

    observe([image, content].filter(Boolean), { threshold: 0.15 });
  }

  /* ---------- 4. Daftar publikasi cards ---------- */
  function initCards() {
    const header = document.querySelector('.berita-list-header');
    const cards = document.querySelectorAll('.berita-card');

    if (header) {
      header.classList.add('ba-reveal');
      observe([header]);
    }

    cards.forEach((el, i) => {
      el.classList.add('ba-scale');
      el.style.transitionDelay = Math.min(i * 80, 480) + 'ms';
    });

    observe(Array.from(cards), { threshold: 0.1 });
  }

  /* ---------- 5. Pagination ---------- */
  function initPagination() {
    const pagination = document.querySelector('.berita-pagination');
    if (!pagination) return;

    pagination.classList.add('ba-reveal');
    observe([pagination]);
  }

  /* ---------- 6. Sidebar ---------- */
  function initSidebar() {
    const cards = document.querySelectorAll('.berita-sidebar .sidebar-card');

    cards.forEach((el, i) => {
      el.classList.add('ba-reveal');
      el.style.transitionDelay = (i * 120) + 'ms';
    });

    observe(Array.from(cards), { threshold: 0.1 });
  }

  /* ---------- 7. Newsletter CTA ---------- */
  function initNewsletter() {
    const section = document.querySelector('.berita-newsletter');
    if (!section) return;

    const text = section.querySelector('.berita-newsletter-text');
    const form = section.querySelector('.berita-newsletter-form');

    if (text) text.classList.add('ba-reveal');
    if (form) {
      form.classList.add('ba-reveal');
      form.style.transitionDelay = '150ms';
    }

    observe([text, form].filter(Boolean), { threshold: 0.2 });
  }

  /* ---------- Boot ---------- */
  function boot() {
    safe(injectStyles, 'injectStyles');
    safe(initHero, 'initHero');
    safe(initFilter, 'initFilter');
    safe(initFeatured, 'initFeatured');
    safe(initCards, 'initCards');
    safe(initPagination, 'initPagination');
    safe(initSidebar, 'initSidebar');
    safe(initNewsletter, 'initNewsletter');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();