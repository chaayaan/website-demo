document.addEventListener('DOMContentLoaded', function () {

    /* ═══ PRELOADER — bulletproof removal ═══ */
    (function killPreloader() {
        var el = document.getElementById('preloader');
        if (!el) return;                       // safety: element gone already
        function hide() {
            el.classList.add('hidden');
            setTimeout(function () {           // remove from DOM after transition
                if (el.parentNode) el.parentNode.removeChild(el);
            }, 600);
        }
        // 1) If page already loaded (cached / fast), hide immediately
        if (document.readyState === 'complete') {
            return hide();
        }
        // 2) Hide when all resources finish loading
        window.addEventListener('load', function () {
            setTimeout(hide, 400);             // tiny delay so the user sees it once
        });
        // 3) Absolute failsafe — never stay longer than 2.5 s
        setTimeout(hide, 2500);
    })();

    /* ═══ Gold Particles ═══ */
    var particlesContainer = document.getElementById('goldParticles');
    if (particlesContainer) {
        for (var i = 0; i < 25; i++) {
            var p = document.createElement('div');
            p.classList.add('gold-particle');
            p.style.left = Math.random() * 100 + '%';
            p.style.width = p.style.height = (Math.random() * 3 + 1) + 'px';
            p.style.animationDuration = (Math.random() * 15 + 10) + 's';
            p.style.animationDelay = (Math.random() * 10) + 's';
            particlesContainer.appendChild(p);
        }
    }

    /* ═══ Header Scroll ═══ */
    var header = document.getElementById('header');
    window.addEventListener('scroll', function () {
        header.classList.toggle('scrolled', window.scrollY > 60);
    });

    /* ═══ Mobile Menu ═══ */
    var hamburger = document.getElementById('hamburger');
    var mobileNav = document.getElementById('mobileNav');
    if (hamburger && mobileNav) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('active');
            mobileNav.classList.toggle('active');
            document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
        });
        var mobileLinks = mobileNav.querySelectorAll('a');
        for (var m = 0; m < mobileLinks.length; m++) {
            mobileLinks[m].addEventListener('click', function () {
                hamburger.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        }
    }

    /* ═══ Hero Slider ═══ */
    var heroSlides = document.querySelectorAll('.hero-slide');
    var heroTextSlides = document.querySelectorAll('.hero-text-slide');
    var dots = document.querySelectorAll('.dot');
    var heroIndex = 0;
    var heroInterval;

    function goToHeroSlide(index) {
        for (var a = 0; a < heroSlides.length; a++) {
            heroSlides[a].classList.remove('active');
            heroTextSlides[a].classList.remove('active');
            dots[a].classList.remove('active');
        }
        if (heroSlides[index]) heroSlides[index].classList.add('active');
        if (heroTextSlides[index]) heroTextSlides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
        heroIndex = index;
    }

    function nextHeroSlide() {
        if (heroSlides.length === 0) return;
        goToHeroSlide((heroIndex + 1) % heroSlides.length);
    }

    function startHeroSlider() {
        clearInterval(heroInterval);
        heroInterval = setInterval(nextHeroSlide, 5000);
    }

    if (heroSlides.length) {
        for (var d = 0; d < dots.length; d++) {
            dots[d].addEventListener('click', function () {
                clearInterval(heroInterval);
                goToHeroSlide(parseInt(this.dataset.slide));
                startHeroSlider();
            });
        }
        startHeroSlider();
    }

    /* ═══ Scroll Reveal ═══ */
    var reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var revealObs = new IntersectionObserver(function (entries) {
            for (var r = 0; r < entries.length; r++) {
                if (entries[r].isIntersecting) {
                    entries[r].target.classList.add('revealed');
                    revealObs.unobserve(entries[r].target);
                }
            }
        }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
        for (var rv = 0; rv < reveals.length; rv++) revealObs.observe(reveals[rv]);
    } else {
        // Fallback: show everything immediately
        for (var rv2 = 0; rv2 < reveals.length; rv2++) reveals[rv2].classList.add('revealed');
    }

    /* ═══ Counter Animation ═══ */
    var counters = document.querySelectorAll('.stat-number');
    if ('IntersectionObserver' in window) {
        var counterObs = new IntersectionObserver(function (entries) {
            for (var c = 0; c < entries.length; c++) {
                if (entries[c].isIntersecting) {
                    animateCounter(entries[c].target);
                    counterObs.unobserve(entries[c].target);
                }
            }
        }, { threshold: 0.5 });
        for (var cn = 0; cn < counters.length; cn++) counterObs.observe(counters[cn]);
    } else {
        for (var cn2 = 0; cn2 < counters.length; cn2++) counters[cn2].textContent = counters[cn2].dataset.target;
    }

    function animateCounter(el) {
        var target = parseInt(el.dataset.target) || 0;
        var duration = 2000;
        var start = performance.now();
        function step(now) {
            var elapsed = now - start;
            var progress = Math.min(elapsed / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target);
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target;
        }
        requestAnimationFrame(step);
    }

    /* ═══ FAQ Toggle ═══ */
    var faqToggles = document.querySelectorAll('.faq-toggle');
    for (var f = 0; f < faqToggles.length; f++) {
        faqToggles[f].addEventListener('click', function () {
            var item = this.parentElement;
            var wasActive = item.classList.contains('active');
            var allItems = document.querySelectorAll('.faq-item');
            for (var fi = 0; fi < allItems.length; fi++) allItems[fi].classList.remove('active');
            if (!wasActive) item.classList.add('active');
        });
    }

    /* ═══ Contact Form ═══ */
    var form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var name = this.name.value.trim();
            var phone = this.phone.value.trim();
            var message = this.message.value.trim();
            if (!name || !phone || !message) {
                showToast('অনুগ্রহ করে সকল তথ্য পূরণ করুন।', 'error');
                return;
            }
            showToast('আপনার বার্তা সফলভাবে পাঠানো হয়েছে!', 'success');
            this.reset();
        });
    }

    /* ═══ Toast ═══ */
    function showToast(msg, type) {
        var toast = document.createElement('div');
        toast.textContent = msg;
        var bg = type === 'success'
            ? 'background:rgba(37,211,102,0.92);box-shadow:0 8px 30px rgba(37,211,102,0.3)'
            : 'background:rgba(239,68,68,0.92);box-shadow:0 8px 30px rgba(239,68,68,0.3)';
        toast.style.cssText = 'position:fixed;bottom:30px;left:50%;transform:translateX(-50%) translateY(20px);'
            + 'padding:14px 28px;border-radius:12px;z-index:999999;font-family:"Hind Siliguri",sans-serif;'
            + 'font-size:0.92rem;font-weight:600;color:#fff;opacity:0;transition:all .4s ease;'
            + 'backdrop-filter:blur(10px);' + bg;
        document.body.appendChild(toast);
        requestAnimationFrame(function () {
            toast.style.opacity = '1';
            toast.style.transform = 'translateX(-50%) translateY(0)';
        });
        setTimeout(function () {
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(-50%) translateY(20px)';
            setTimeout(function () { if (toast.parentNode) toast.parentNode.removeChild(toast); }, 400);
        }, 3000);
    }

    /* ═══ Back to Top ═══ */
    var backBtn = document.getElementById('backToTop');
    if (backBtn) {
        window.addEventListener('scroll', function () {
            backBtn.classList.toggle('visible', window.scrollY > 500);
        });
        backBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

});