
document.addEventListener('DOMContentLoaded', () => {

    // ── Theme Toggle (Desktop + Mobile) ───────
    const themeToggles = document.querySelectorAll('.theme-toggle');
    const themeToggleTexts = document.querySelectorAll('.theme-toggle-text');
    const themeLogos = document.querySelectorAll('.theme-logo');
    const storageKey = 'ue-theme';

    const applyTheme = (theme) => {
        document.body.setAttribute('data-theme', theme);

        themeLogos.forEach(logo => {
            const lightSrc = logo.dataset.lightSrc || logo.getAttribute('src') || '';
            const darkSrc = logo.dataset.darkSrc || '';
            const nextSrc = theme === 'dark' && darkSrc.trim() ? darkSrc : lightSrc;
            if (nextSrc) logo.setAttribute('src', nextSrc);
        });

        themeToggleTexts.forEach(textEl => {
            const lightText = textEl.dataset.lightText || 'Switch to dark mode';
            const darkText = textEl.dataset.darkText || 'Switch to light mode';
            textEl.textContent = theme === 'dark' ? darkText : lightText;
        });

        themeToggles.forEach(toggle => {
            toggle.checked = theme === 'dark';
            toggle.setAttribute('aria-checked', theme === 'dark' ? 'true' : 'false');
            toggle.setAttribute('title', theme === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
        });
    };

    const getPreferredTheme = () => {
        const savedTheme = localStorage.getItem(storageKey);
        if (savedTheme === 'light' || savedTheme === 'dark') return savedTheme;
        return 'light';
    };

    applyTheme(getPreferredTheme());

    themeToggles.forEach(toggle => {
        toggle.addEventListener('change', () => {
            const nextTheme = toggle.checked ? 'dark' : 'light';
            applyTheme(nextTheme);
            localStorage.setItem(storageKey, nextTheme);
        });
    });


    // ── AOS Init ──────────────────────────────
    AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: true,
        offset: 60,
    });

    // ── Hero Swiper ───────────────────────────
    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        autoplay: { delay: 5500, disableOnInteraction: false },
        speed: 900,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        pagination: {
            el: '.hero-pagination',
            clickable: true,
        },
        navigation: {
            prevEl: '.hero-btn-prev',
            nextEl: '.hero-btn-next',
        },
        on: {
            slideChangeTransitionStart() {
                // Restart content animation on each slide
                const active = document.querySelector('.swiper-slide-active .hero-content');
                if (active) {
                    active.style.animation = 'none';
                    active.offsetHeight; // reflow
                    active.style.animation = '';
                }
            }
        }
    });

    // ── Sticky Navbar ─────────────────────────
    const navbar = document.getElementById('mainNavbar');
    const onScroll = () => {
        navbar.classList.toggle('nav-scrolled', window.scrollY > 50);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();


    // ── Smooth scroll for anchor links ────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', e => {
            const href = anchor.getAttribute('href');
            if (href === '#') return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();

                // ── Close offcanvas first, then scroll ──
                const openCanvas = document.querySelector('.offcanvas.show');
                if (openCanvas) {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(openCanvas);
                    if (bsOffcanvas) {
                        bsOffcanvas.hide();
                        // Wait for offcanvas close animation (300ms) then scroll
                        setTimeout(() => {
                            const offset = (navbar?.offsetHeight || 64) + 12;
                            const top = target.getBoundingClientRect().top + window.scrollY - offset;
                            window.scrollTo({ top, behavior: 'smooth' });
                        }, 120);
                        return; // exit early, scroll handled in setTimeout
                    }
                }

                // ── No offcanvas open — scroll immediately ──
                const offset = (navbar?.offsetHeight || 64) + 12;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    // ── Counter Animation ─────────────────────
    let counted = false;
    const statsBar = document.querySelector('.stats-bar');

    const countUp = (el, target, duration = 1800) => {
        const start = performance.now();
        const step = (now) => {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
            el.textContent = Math.floor(eased * target).toLocaleString();
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target.toLocaleString();
        };
        requestAnimationFrame(step);
    };

    const statsObs = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !counted) {
            counted = true;
            document.querySelectorAll('.counter').forEach(el => {
                countUp(el, parseInt(el.dataset.target));
            });
        }
    }, { threshold: 0.5 });

    if (statsBar) statsObs.observe(statsBar);

    // ── Smart Scroll Button ──────────────────────
    const smartWrapper = document.getElementById('smartScrollWrapper');
    const smartBtn = document.getElementById('smartScrollBtn');
    const progressCircle = document.querySelector('.progress-ring__circle');

    if (smartWrapper && smartBtn && progressCircle) {

        const radius = 24;
        const circumference = 2 * Math.PI * radius;

        progressCircle.style.strokeDasharray = circumference;
        progressCircle.style.strokeDashoffset = circumference;

        let lastScroll = 0;
        let hideTimer = null;
        let currentDirection = 'down';

        // Set ring progress
        function setProgress(percent) {
            const offset = circumference - (percent / 100) * circumference;
            progressCircle.style.strokeDashoffset = offset;
        }

        // Scroll listener
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

            setProgress(scrollPercent);

            // Only react if scrolled more than 5px
            if (Math.abs(scrollTop - lastScroll) < 5) return;

            // Show button
            smartWrapper.classList.add('show');

            // Update arrow direction
            if (scrollTop > lastScroll) {
                currentDirection = 'down';
                smartBtn.innerHTML = '<i class="bi bi-arrow-down"></i>';
            } else {
                currentDirection = 'up';
                smartBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
            }

            lastScroll = scrollTop <= 0 ? 0 : scrollTop;

            // Auto-hide after 800ms of no scrolling
            clearTimeout(hideTimer);
            hideTimer = setTimeout(() => {
                smartWrapper.classList.remove('show');
            }, 800);

        }, { passive: true });

        // Click — scroll to footer or top
        smartBtn.addEventListener('click', () => {
            if (currentDirection === 'down') {
                // Scroll to footer
                const footer = document.querySelector('footer');
                if (footer) {
                    footer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            } else {
                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    }
    // ── Mobile hamburger icon animation ───────
    const toggler = document.querySelector('.navbar-toggler');
    const collapseEl = document.getElementById('navbarNav');

    if (toggler && collapseEl) {
        collapseEl.addEventListener('show.bs.collapse', () => {
            toggler.classList.add('is-open');
        });
        collapseEl.addEventListener('hide.bs.collapse', () => {
            toggler.classList.remove('is-open');
        });
    }

    // ── Brand marquee pause on hover ──────────
    // (handled via CSS: .brands-track:hover { animation-play-state: paused; })

    // ── Product card: WhatsApp link title ─────
    document.querySelectorAll('.product-enquire-btn').forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.boxShadow = '0 4px 20px rgba(37,211,102,.35)';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.boxShadow = '';
        });
    });

    // ── Random brand card background color (4 colors) ──
    const brandCards = document.querySelectorAll('.company-products-section .brand-card');
    const mixClasses = ['bg-mix-1', 'bg-mix-2', 'bg-mix-3', 'bg-mix-4'];

    brandCards.forEach(card => {
        mixClasses.forEach(cls => card.classList.remove(cls));
        const randomClass = mixClasses[Math.floor(Math.random() * mixClasses.length)];
        card.classList.add(randomClass);
    });

    // ── Scroll-triggered navbar brand color ───
    const logoWhite = document.querySelector('.nav-logo-white');
    const logoDark = document.querySelector('.nav-logo-dark');
    // Always show dark logo since navbar is always white
    // (logos toggling not needed for always-white navbar)

    // ── Touch swipe for mobile (hero) ─────────
    // (handled by Swiper's built-in touch support)

    // ── Lazy load fallback ────────────────────
    if ('loading' in HTMLImageElement.prototype) {
        // Native lazy loading supported — do nothing extra
    } else {
        // Fallback: load all images immediately
        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            img.src = img.src;
        });
    }

    console.log('✅ M/S Uttara Electric — Website Loaded');
});

