/**
 * Merkur Sitepackage – main.js
 */
(function () {
    'use strict';

    // -------------------------------------------------------------------------
    // Sticky navigation
    // -------------------------------------------------------------------------
    const header = document.getElementById('site-header');

    function onScroll() {
        if (window.scrollY > 40) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    }

    if (header) {
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll(); // run once on load
    }

    // -------------------------------------------------------------------------
    // Mobile menu toggle
    // -------------------------------------------------------------------------
    const toggle = document.querySelector('.navbar__toggle');
    const menu   = document.getElementById('main-menu');

    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!expanded));
            menu.classList.toggle('is-open', !expanded);
            document.body.style.overflow = expanded ? '' : 'hidden';
        });

        // Close menu on nav link click (one-page scroll)
        menu.querySelectorAll('.navbar__link').forEach(function (link) {
            link.addEventListener('click', function () {
                toggle.setAttribute('aria-expanded', 'false');
                menu.classList.remove('is-open');
                document.body.style.overflow = '';
            });
        });

        // Close menu on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && menu.classList.contains('is-open')) {
                toggle.setAttribute('aria-expanded', 'false');
                menu.classList.remove('is-open');
                document.body.style.overflow = '';
                toggle.focus();
            }
        });
    }

    // -------------------------------------------------------------------------
    // Smooth scroll for anchor links
    // -------------------------------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href').slice(1);
            if (!targetId) return;

            const target = document.getElementById(targetId);
            if (!target) return;

            e.preventDefault();

            target.scrollIntoView({ behavior: 'smooth', block: 'start' });

            // Update URL without triggering scroll again
            history.pushState(null, '', '#' + targetId);

            // Move focus to target for accessibility
            if (!target.hasAttribute('tabindex')) {
                target.setAttribute('tabindex', '-1');
            }
            target.focus({ preventScroll: true });
        });
    });

    // -------------------------------------------------------------------------
    // Intersection Observer – scroll-reveal animations
    // -------------------------------------------------------------------------
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('[data-animate]').forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback: show all animated elements immediately
        document.querySelectorAll('[data-animate]').forEach(function (el) {
            el.classList.add('is-visible');
        });
    }

    // -------------------------------------------------------------------------
    // Active nav link based on scroll position
    // -------------------------------------------------------------------------
    var sections  = Array.from(document.querySelectorAll('section[id]'));
    var navLinks  = Array.from(document.querySelectorAll('.navbar__link[href^="#"]'));
    var navHeight = header ? header.offsetHeight : 80;

    function updateActiveNavLink() {
        var scrollY = window.scrollY + navHeight + 60;

        sections.forEach(function (section) {
            var sectionTop    = section.offsetTop;
            var sectionHeight = section.offsetHeight;
            var sectionId     = section.getAttribute('id');

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach(function (link) {
                    link.closest('.navbar__item').classList.toggle(
                        'is-active',
                        link.getAttribute('href') === '#' + sectionId
                    );
                });
            }
        });
    }

    if (sections.length && navLinks.length) {
        window.addEventListener('scroll', updateActiveNavLink, { passive: true });
        updateActiveNavLink();
    }

    // -------------------------------------------------------------------------
    // Contact form – client-side validation feedback
    // -------------------------------------------------------------------------
    var contactForm = document.getElementById('contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            var requiredFields = this.querySelectorAll('[required]');
            var isValid = true;

            requiredFields.forEach(function (field) {
                field.classList.remove('is-error');

                if (!field.value.trim() || (field.type === 'checkbox' && !field.checked)) {
                    field.classList.add('is-error');
                    isValid = false;
                }

                if (field.type === 'email' && field.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
                    field.classList.add('is-error');
                    isValid = false;
                }
            });

            if (!isValid) {
                var firstError = contactForm.querySelector('.is-error');
                if (firstError) firstError.focus();
                return;
            }

            // Replace with your actual form submission logic (TYPO3 form framework, fetch, etc.)
            console.info('[Merkur] Form submission – implement server-side handler.');
        });

        // Remove error state on input
        contactForm.querySelectorAll('.form-control').forEach(function (field) {
            field.addEventListener('input', function () {
                this.classList.remove('is-error');
            });
        });
    }

    // -------------------------------------------------------------------------
    // Add .js class to <html> to enable JS-enhanced styles
    // -------------------------------------------------------------------------
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');

})();
