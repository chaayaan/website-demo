<?php
/**
 * Gold Lab – Reusable Header Navigation
 * Include this file inside <body> on every page.
 */
 $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- ══ INTRO OVERLAY ══ -->
<div id="rg-intro-overlay">
    <video
        id="rg-intro-video"
        src="bhaluka animation.mp4"
        autoplay
        muted
        playsinline
        preload="auto"
    ></video>
</div>

<header id="mainHeader" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" role="banner">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <nav class="flex items-center justify-between py-3 sm:py-4 lg:py-5" aria-label="Main navigation">

      <!-- Logo -->
      <a href="index.php" class="flex items-center gap-2.5" aria-label="Bhaluka Gold Lab Home">
        <img src="bhaluka.png" alt="Bhaluka Gold Lab Logo" class="logo-icon h-8 w-auto object-contain transition-all duration-300" onerror="this.style.display='none'">
        <span class="logo-text text-white text-base sm:text-lg font-bold tracking-tight transition-colors duration-300">
          Bhaluka <span class="text-gold-400">Gold Lab</span>
        </span>
      </a>

      <!-- Desktop Nav -->
      <ul class="hidden md:flex items-center gap-1">
        <li>
          <a href="index.php" class="nav-link <?php echo $currentPage === 'index.php' ? 'active text-white' : 'text-white/80'; ?> text-sm font-medium px-4 py-2 rounded-full hover:text-white transition-colors duration-150">Home</a>
        </li>
        <li>
          <a href="about.php" class="nav-link <?php echo $currentPage === 'about.php' ? 'active text-white' : 'text-white/80'; ?> text-sm font-medium px-4 py-2 rounded-full hover:text-white transition-colors duration-150">About</a>
        </li>
        <li>
          <a href="services.php" class="nav-link <?php echo $currentPage === 'services.php' ? 'active text-white' : 'text-white/80'; ?> text-sm font-medium px-4 py-2 rounded-full hover:text-white transition-colors duration-150">Services</a>
        </li>
        <li>
          <a href="pricing.php" class="nav-link <?php echo $currentPage === 'pricing.php' ? 'active text-white' : 'text-white/80'; ?> text-sm font-medium px-4 py-2 rounded-full hover:text-white transition-colors duration-150">Pricing</a>
        </li>
        <li>
          <a href="contact.php" class="nav-link <?php echo $currentPage === 'contact.php' ? 'active text-white' : 'text-white/80'; ?> text-sm font-medium px-4 py-2 rounded-full hover:text-white transition-colors duration-150">Contact</a>
        </li>
        <li class="ml-2">
          <a href="contact.php" class="inline-flex items-center gap-2 bg-gold-400 hover:bg-gold-500 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-colors duration-150">
            <i data-lucide="phone" class="w-3.5 h-3.5"></i> Book Test
          </a>
        </li>
      </ul>

      <!-- Mobile Toggle -->
      <button id="menuToggle" class="menu-btn md:hidden text-white p-1.5 rounded-lg hover:bg-white/10 transition-all duration-150" aria-label="Toggle menu" aria-expanded="false">
        <i data-lucide="menu" id="menuIcon" class="w-[18px] h-[18px]"></i>
        <i data-lucide="x" id="closeIcon" class="w-[18px] h-[18px] hidden"></i>
      </button>

    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu md:hidden bg-black/50 backdrop-blur-xl rounded-xl mb-2 border border-white/10" role="navigation" aria-label="Mobile navigation">
      <ul class="flex flex-col py-1">
        <li><a href="index.php" class="mobile-nav-link block text-white text-[13px] font-medium px-4 py-2.5 rounded-lg transition-colors duration-150">Home</a></li>
        <li><a href="about.php" class="mobile-nav-link block text-white/70 text-[13px] font-medium px-4 py-2.5 rounded-lg hover:text-white transition-colors duration-150">About</a></li>
        <li><a href="services.php" class="mobile-nav-link block text-white/70 text-[13px] font-medium px-4 py-2.5 rounded-lg hover:text-white transition-colors duration-150">Services</a></li>
        <li><a href="pricing.php" class="mobile-nav-link block text-white/70 text-[13px] font-medium px-4 py-2.5 rounded-lg hover:text-white transition-colors duration-150">Pricing</a></li>
        <li><a href="contact.php" class="mobile-nav-link block text-white/70 text-[13px] font-medium px-4 py-2.5 rounded-lg hover:text-white transition-colors duration-150">Contact</a></li>
        <li class="pt-1 px-4 pb-2">
          <a href="contact.php" class="flex items-center justify-center gap-2 bg-gold-400 text-white text-[13px] font-semibold px-4 py-2.5 rounded-lg">
            <i data-lucide="phone" class="w-3.5 h-3.5"></i> Book a Test
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>

<style>
/* ── Intro Overlay (same as reference) ─────── */
#rg-intro-overlay {
    position: fixed;
    inset: 0;
    z-index: 99999;
    background: #fefefe;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.6s ease, visibility 0.6s ease;
}
#rg-intro-overlay.rg-intro-hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}
#rg-intro-video {
    width: min(680px, 90vw);
    aspect-ratio: 1280 / 504;
    object-fit: contain;
    display: block;
}

/* ── Mobile menu ───────────────────────────── */
.mobile-menu {
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                opacity 0.25s ease,
                margin 0.3s ease;
    margin-bottom: 0;
}
.mobile-menu.open {
    max-height: 400px;
    opacity: 1;
    margin-bottom: 0.5rem;
}

/* ── Header scrolled ───────────────────────── */
.header-scrolled {
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}
.header-scrolled .logo-icon {
    filter: drop-shadow(0 0 6px rgba(234, 179, 8, 0.4));
}

/* ── Active nav ────────────────────────────── */
.nav-link.active {
    background: rgba(234, 179, 8, 0.12);
    color: #facc15 !important;
}
</style>

<script>
/* ── Intro Overlay (once per session) — exact reference logic ── */
(function () {
    var overlay = document.getElementById('rg-intro-overlay');
    var video   = document.getElementById('rg-intro-video');
    if (!overlay || !video) return;

    if (sessionStorage.getItem('rg_intro_shown')) {
        overlay.style.transition = 'none';
        overlay.classList.add('rg-intro-hidden');
        return;
    }

    function hideOverlay() {
        overlay.classList.add('rg-intro-hidden');
        sessionStorage.setItem('rg_intro_shown', '1');
    }

    video.addEventListener('ended', hideOverlay);

    var fallback = setTimeout(hideOverlay, 4500);
    video.addEventListener('ended', function () { clearTimeout(fallback); });
    video.addEventListener('error', function () {
        clearTimeout(fallback);
        setTimeout(hideOverlay, 400);
    });
})();

/* ── Mobile menu toggle ── */
(function() {
    var toggle = document.getElementById('menuToggle');
    var menu = document.getElementById('mobileMenu');
    var iconOpen = document.getElementById('menuIcon');
    var iconClose = document.getElementById('closeIcon');
    var isOpen = false;

    function setOpen(state) {
        isOpen = state;
        menu.classList.toggle('open', isOpen);
        iconOpen.classList.toggle('hidden', isOpen);
        iconClose.classList.toggle('hidden', !isOpen);
        toggle.setAttribute('aria-expanded', isOpen);
    }

    toggle.addEventListener('click', function() { setOpen(!isOpen); });

    menu.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', function() { setOpen(false); });
    });

    document.addEventListener('click', function(e) {
        if (isOpen && !toggle.contains(e.target) && !menu.contains(e.target)) {
            setOpen(false);
        }
    });

    /* Scroll: transparent → solid */
    var header = document.getElementById('mainHeader');
    function onScroll() {
        header.classList.toggle('header-scrolled', window.scrollY > 60);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();
</script>