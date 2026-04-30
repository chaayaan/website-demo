<?php
/**
 * Gold Lab – Reusable Header Navigation
 * Include this file inside <body> on every page.
 */
 $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header id="mainHeader" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" role="banner">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <nav class="flex items-center justify-between py-3 sm:py-4 lg:py-5" aria-label="Main navigation">

      <!-- Logo -->
      <a href="index.php" class="flex items-center gap-2" aria-label="Gold Lab Home">
        <i data-lucide="flask-conical" class="logo-icon w-6 h-6 text-gold-400 transition-colors duration-300"></i>
        <span class="logo-text text-white text-base sm:text-lg font-bold tracking-tight transition-colors duration-300">
          Gold <span class="text-gold-400">Lab</span>
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

<script>
  // Mobile menu toggle
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

    // Scroll: transparent → solid
    var header = document.getElementById('mainHeader');
    function onScroll() {
      header.classList.toggle('header-scrolled', window.scrollY > 60);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  })();
</script>