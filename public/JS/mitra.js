document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    /* =========================================================
       MITRA PAGE - MODERN INTERACTIVE ANIMATION
       SMK INFOKOM BOGOR
       ========================================================= */

    const page = document.querySelector('.mitra-page');

    if (!page) return;

    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;


    /* =========================================================
       1. SCROLL REVEAL
       ========================================================= */

    const revealSelectors = [
        '.mitra-section-header',
        '.mitra-skema-card',
        '.mitra-stat-card',
        '.mitra-partner-card',
        '.mitra-alasan-card',
        '.mitra-cta',
        '.mitra-hero-copy',
        '.mitra-hero-visual'
    ];

    const revealElements = page.querySelectorAll(
        revealSelectors.join(',')
    );

    revealElements.forEach((element, index) => {
        element.classList.add('mitra-reveal');

        // Stagger khusus untuk card
        if (
            element.classList.contains('mitra-skema-card') ||
            element.classList.contains('mitra-stat-card') ||
            element.classList.contains('mitra-partner-card') ||
            element.classList.contains('mitra-alasan-card')
        ) {
            element.style.setProperty(
                '--reveal-delay',
                `${Math.min(index * 60, 360)}ms`
            );
        }
    });


    if (!prefersReducedMotion && 'IntersectionObserver' in window) {

        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach(entry => {

                    if (!entry.isIntersecting) return;

                    entry.target.classList.add('is-visible');

                    observer.unobserve(entry.target);
                });
            },
            {
                threshold: 0.12,
                rootMargin: '0px 0px -50px 0px'
            }
        );

        revealElements.forEach(element => {
            revealObserver.observe(element);
        });

    } else {

        revealElements.forEach(element => {
            element.classList.add('is-visible');
        });

    }


    /* =========================================================
       2. STAT COUNTER
       ========================================================= */

    const statNumbers = page.querySelectorAll('.mitra-stat-number');

    function animateCounter(element) {

        const original = element.textContent.trim();

        const match = original.match(/^([\d.,]+)(.*)$/);

        if (!match) return;

        const target = parseFloat(
            match[1].replace(',', '.')
        );

        const suffix = match[2];

        if (Number.isNaN(target)) return;

        if (prefersReducedMotion) {
            element.textContent = original;
            return;
        }

        const duration = 1400;
        const startTime = performance.now();

        function updateCounter(currentTime) {

            const progress = Math.min(
                (currentTime - startTime) / duration,
                1
            );

            // Ease out cubic
            const eased = 1 - Math.pow(1 - progress, 3);

            const current = target * eased;

            if (target % 1 === 0) {
                element.textContent =
                    Math.floor(current) + suffix;
            } else {
                element.textContent =
                    current.toFixed(1) + suffix;
            }

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = original;
            }
        }

        requestAnimationFrame(updateCounter);
    }


    if ('IntersectionObserver' in window) {

        const counterObserver = new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (!entry.isIntersecting) return;

                    animateCounter(entry.target);

                    counterObserver.unobserve(entry.target);
                });

            },
            {
                threshold: 0.7
            }
        );

        statNumbers.forEach(element => {
            counterObserver.observe(element);
        });

    }


    /* =========================================================
       3. HERO PROGRESS BAR
       ========================================================= */

    const progressBar = page.querySelector('.mitra-progress-bar');

    if (progressBar) {

        const targetWidth =
            progressBar.style.width || '89.4%';

        if (!prefersReducedMotion) {

            progressBar.style.width = '0%';

            requestAnimationFrame(() => {

                setTimeout(() => {
                    progressBar.style.width = targetWidth;
                }, 500);

            });
        }
    }


    /* =========================================================
       4. CARD TILT EFFECT
       ========================================================= */

    const tiltCards = page.querySelectorAll(
        '.mitra-skema-card, .mitra-alasan-card, .mitra-partner-card'
    );

    if (!prefersReducedMotion && window.matchMedia('(hover: hover)').matches) {

        tiltCards.forEach(card => {

            card.addEventListener('mousemove', event => {

                const rect = card.getBoundingClientRect();

                const x =
                    event.clientX - rect.left;

                const y =
                    event.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX =
                    ((y - centerY) / centerY) * -2.5;

                const rotateY =
                    ((x - centerX) / centerX) * 2.5;

                card.style.transform = `
                    perspective(900px)
                    rotateX(${rotateX}deg)
                    rotateY(${rotateY}deg)
                    translateY(-5px)
                `;

                card.style.setProperty(
                    '--mouse-x',
                    `${x}px`
                );

                card.style.setProperty(
                    '--mouse-y',
                    `${y}px`
                );
            });

            card.addEventListener('mouseleave', () => {

                card.style.transform = '';

            });

        });
    }


    /* =========================================================
       5. CARD GLOW FOLLOW CURSOR
       ========================================================= */

    if (!prefersReducedMotion && window.matchMedia('(hover: hover)').matches) {

        const glowCards = page.querySelectorAll(
            '.mitra-skema-card, .mitra-alasan-card, .mitra-partner-card'
        );

        glowCards.forEach(card => {

            card.addEventListener('mousemove', event => {

                const rect =
                    card.getBoundingClientRect();

                const x =
                    event.clientX - rect.left;

                const y =
                    event.clientY - rect.top;

                card.style.setProperty(
                    '--mouse-x',
                    `${x}px`
                );

                card.style.setProperty(
                    '--mouse-y',
                    `${y}px`
                );

            });

        });
    }


    /* =========================================================
       6. FILTER MITRA
       ========================================================= */

    const filterButtons = page.querySelectorAll(
        '.mitra-pill'
    );

    const partnerCards = page.querySelectorAll(
        '.mitra-partner-card'
    );

    const emptyState = page.querySelector(
        '.mitra-empty-state'
    );


    filterButtons.forEach(button => {

        button.addEventListener('click', () => {

            const filter =
                button.dataset.filter;

            // Active button
            filterButtons.forEach(btn => {
                btn.classList.remove('is-active');
            });

            button.classList.add('is-active');


            let visibleCount = 0;

            partnerCards.forEach((card, index) => {

                const category =
                    card.dataset.category;

                const shouldShow =
                    filter === 'semua' ||
                    category === filter;

                if (shouldShow) {

                    visibleCount++;

                    card.hidden = false;

                    // Reset animation
                    card.classList.remove(
                        'mitra-filter-show'
                    );

                    // Force reflow
                    void card.offsetWidth;

                    card.style.setProperty(
                        '--filter-delay',
                        `${visibleCount * 60}ms`
                    );

                    card.classList.add(
                        'mitra-filter-show'
                    );

                } else {

                    card.classList.remove(
                        'mitra-filter-show'
                    );

                    card.hidden = true;
                }
            });


            // Empty state
            if (emptyState) {
                emptyState.hidden =
                    visibleCount !== 0;
            }

        });

    });


    /* =========================================================
       7. HERO PARALLAX
       ========================================================= */

    const heroVisual =
        page.querySelector('.mitra-hero-visual');

    const heroCard =
        page.querySelector('.mitra-hero-card');


    if (
        heroVisual &&
        heroCard &&
        !prefersReducedMotion &&
        window.matchMedia('(hover: hover)').matches
    ) {

        heroVisual.addEventListener(
            'mousemove',
            event => {

                const rect =
                    heroVisual.getBoundingClientRect();

                const x =
                    (event.clientX - rect.left) /
                    rect.width -
                    0.5;

                const y =
                    (event.clientY - rect.top) /
                    rect.height -
                    0.5;

                heroCard.style.transform = `
                    perspective(1200px)
                    rotateX(${y * -4}deg)
                    rotateY(${x * 5}deg)
                    translateZ(10px)
                `;
            }
        );

        heroVisual.addEventListener(
            'mouseleave',
            () => {

                heroCard.style.transform = '';

            }
        );
    }


    /* =========================================================
       8. MAGNETIC BUTTON
       ========================================================= */

    const magneticButtons = page.querySelectorAll(
        '.mitra-btn'
    );


    if (
        !prefersReducedMotion &&
        window.matchMedia('(hover: hover)').matches
    ) {

        magneticButtons.forEach(button => {

            button.addEventListener('mousemove', event => {

                const rect =
                    button.getBoundingClientRect();

                const x =
                    event.clientX -
                    rect.left -
                    rect.width / 2;

                const y =
                    event.clientY -
                    rect.top -
                    rect.height / 2;

                button.style.transform = `
                    translate(${x * 0.08}px, ${y * 0.08}px)
                `;
            });


            button.addEventListener('mouseleave', () => {

                button.style.transform = '';

            });

        });
    }


    /* =========================================================
       9. SMOOTH SCROLL
       ========================================================= */

    page.querySelectorAll(
        'a[href^="#"]'
    ).forEach(link => {

        link.addEventListener('click', event => {

            const targetId =
                link.getAttribute('href');

            if (
                !targetId ||
                targetId === '#'
            ) {
                return;
            }

            const target =
                document.querySelector(targetId);

            if (!target) return;

            event.preventDefault();

            target.scrollIntoView({
                behavior: prefersReducedMotion
                    ? 'auto'
                    : 'smooth',
                block: 'start'
            });

        });

    });


    /* =========================================================
       10. ACTIVE FILTER BASED ON URL HASH
       ========================================================= */

    function activateFilterFromHash() {

        const hash =
            window.location.hash.replace('#', '');

        if (!hash) return;

        const validFilters = [
            'semua',
            'pemerintah',
            'pendidikan',
            'media',
            'teknologi'
        ];

        if (!validFilters.includes(hash)) {
            return;
        }

        const button =
            page.querySelector(
                `.mitra-pill[data-filter="${hash}"]`
            );

        if (button) {
            button.click();
        }
    }

    activateFilterFromHash();


    /* =========================================================
       11. SCROLL PROGRESS
       ========================================================= */

    let ticking = false;

    function updateScrollProgress() {

        if (ticking) return;

        ticking = true;

        requestAnimationFrame(() => {

            const scrollTop =
                window.scrollY;

            const documentHeight =
                document.documentElement.scrollHeight -
                window.innerHeight;

            const progress =
                documentHeight > 0
                    ? (scrollTop / documentHeight) * 100
                    : 0;

            page.style.setProperty(
                '--scroll-progress',
                `${progress}%`
            );

            ticking = false;
        });
    }


    if (!prefersReducedMotion) {
        window.addEventListener(
            'scroll',
            updateScrollProgress,
            { passive: true }
        );

        updateScrollProgress();
    }


    /* =========================================================
       12. KEYBOARD ACCESSIBILITY
       ========================================================= */

    filterButtons.forEach(button => {

        button.addEventListener('keydown', event => {

            if (
                event.key === 'Enter' ||
                event.key === ' '
            ) {

                event.preventDefault();

                button.click();
            }

        });

    });


    /* =========================================================
       13. IMAGE FALLBACK
       ========================================================= */

    page.querySelectorAll(
        '.mitra-partner-logo img'
    ).forEach(image => {

        image.addEventListener(
            'error',
            () => {

                image.style.display = 'none';

                const fallback =
                    image.nextElementSibling;

                if (fallback) {
                    fallback.style.display =
                        'flex';
                }

            },
            { once: true }
        );

    });


    /* =========================================================
       14. HERO CARD FLOATING ANIMATION
       ========================================================= */

    if (
        heroCard &&
        !prefersReducedMotion &&
        !window.matchMedia('(hover: hover)').matches
    ) {

        heroCard.classList.add(
            'mitra-mobile-float'
        );
    }


    /* =========================================================
       15. SECTION OBSERVER - ADD ACTIVE STATE
       ========================================================= */

    const sections = page.querySelectorAll(
        'section[id]'
    );

    const sectionObserver =
        'IntersectionObserver' in window
            ? new IntersectionObserver(
                entries => {

                    entries.forEach(entry => {

                        if (
                            entry.isIntersecting
                        ) {

                            entry.target.classList.add(
                                'section-visible'
                            );
                        }

                    });

                },
                {
                    threshold: 0.15
                }
            )
            : null;


    if (sectionObserver) {
        sections.forEach(section => {
            sectionObserver.observe(section);
        });
    }


    console.log(
        '%c MITRA PAGE ',
        'font-weight:bold;padding:4px 8px;border-radius:4px;',
        'Modern interaction initialized.'
    );

});