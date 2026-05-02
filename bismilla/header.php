<?php
/**
 * header.php — Body-only include.
 * Each page manages its own <!DOCTYPE>, <html>, <head>, <title>, and meta tags.
 * This file starts output from <body> onwards.
 */
$currentPage = $currentPage ?? 'home';
?>
<body>

<!-- ══════════════════════════════════════════
     INTRO OVERLAY — shows once per browser session
     ══════════════════════════════════════════ -->
<div id="bgl-intro-overlay">
  <div class="bgl-intro-inner">
    <div class="bgl-intro-logo">BGL</div>
    <div class="bgl-intro-text">BISMILLAH Gold Lab</div>
    <div class="bgl-intro-sub">কুমিল্লা, বাংলাদেশ</div>
  </div>
</div>

<style>
#bgl-intro-overlay {
  position: fixed;
  inset: 0;
  z-index: 99999;
  background: #1B4332;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.7s ease, visibility 0.7s ease;
}
#bgl-intro-overlay.bgl-intro-hidden {
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
}
.bgl-intro-inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;
}
.bgl-intro-logo {
  width: 64px;
  height: 64px;
  background: linear-gradient(135deg, #D4AF37, #B8960C);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Hind Siliguri', sans-serif;
  font-size: 1.4rem;
  font-weight: 800;
  color: #fff;
  opacity: 0;
  transform: scale(0.7);
  animation: bgl-logo-pop 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s forwards;
}
.bgl-intro-text {
  font-family: 'Hind Siliguri', sans-serif;
  font-size: 2.4rem;
  font-weight: 700;
  color: #D4AF37;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid #D4AF37;
  width: 0;
  animation:
    bgl-typing 1.8s steps(18, end) 0.6s forwards,
    bgl-caret  0.6s step-end 0.6s infinite;
}
.bgl-intro-sub {
  font-family: 'Hind Siliguri', sans-serif;
  font-size: 0.95rem;
  color: rgba(255, 255, 255, 0.5);
  letter-spacing: 4px;
  text-transform: uppercase;
  opacity: 0;
  transform: translateY(10px);
  animation: bgl-fade-up 0.6s ease 2.2s forwards;
}
@keyframes bgl-logo-pop {
  to { opacity: 1; transform: scale(1); }
}
@keyframes bgl-typing {
  from { width: 0; }
  to   { width: 18ch; }
}
@keyframes bgl-caret {
  from, to { border-color: transparent; }
  50%       { border-color: #D4AF37; }
}
@keyframes bgl-fade-up {
  to { opacity: 1; transform: translateY(0); }
}
@media (max-width: 480px) {
  .bgl-intro-text { font-size: 1.5rem; }
  .bgl-intro-logo { width: 50px; height: 50px; font-size: 1.1rem; }
  .bgl-intro-sub  { letter-spacing: 2px; font-size: 0.8rem; }
}
</style>

<script>
(function () {
  var overlay = document.getElementById('bgl-intro-overlay');
  if (!overlay) return;
  if (sessionStorage.getItem('bgl_intro_shown')) {
    overlay.style.transition = 'none';
    overlay.classList.add('bgl-intro-hidden');
    return;
  }
  function hideOverlay() {
    overlay.classList.add('bgl-intro-hidden');
    sessionStorage.setItem('bgl_intro_shown', '1');
  }
  setTimeout(hideOverlay, 3400);
})();
</script>


<!-- ══════════════════════════════════════════
     HEADER
     ══════════════════════════════════════════ -->
<header class="site-header" id="mainHeader">
  <div class="container header-inner">

    <a href="index.php" class="logo">
      <div class="logo-icon">BGL</div>
      <div class="logo-text">
        BISMILLAH Gold Lab
        <small>স্বর্ণ পরীক্ষা কেন্দ্র</small>
      </div>
    </a>

    <nav class="desktop-nav" aria-label="Main navigation">
      <a href="index.php"   class="<?php echo $currentPage === 'home'    ? 'active' : ''; ?>">হোম</a>
      <a href="about.php"   class="<?php echo $currentPage === 'about'   ? 'active' : ''; ?>">সম্পর্কে</a>
      <a href="service.php" class="<?php echo $currentPage === 'service' ? 'active' : ''; ?>">সেবা</a>
      <a href="contact.php" class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>">যোগাযোগ</a>
    </nav>

    <div class="header-actions">
      <a href="https://wa.me/8801XXXXXXXXX" target="_blank" rel="noopener" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="tel:+8801XXXXXXXXX" title="কল করুন">
        <i class="fas fa-phone"></i>
      </a>
    </div>

    <button class="hamburger" id="hamburgerBtn" aria-label="মেনু খুলুন" aria-expanded="false" aria-controls="mobileNav">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</header>


<!-- ══════════════════════════════════════════
     MOBILE NAV
     ══════════════════════════════════════════ -->
<div class="mobile-nav" id="mobileNav" role="navigation" aria-label="Mobile navigation">
  <a href="index.php"   class="<?php echo $currentPage === 'home'    ? 'active' : ''; ?>">হোম</a>
  <a href="about.php"   class="<?php echo $currentPage === 'about'   ? 'active' : ''; ?>">সম্পর্কে</a>
  <a href="service.php" class="<?php echo $currentPage === 'service' ? 'active' : ''; ?>">সেবা</a>
  <a href="contact.php" class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>">যোগাযোগ</a>
  <div class="mobile-nav-actions">
    <a href="https://wa.me/8801XXXXXXXXX" target="_blank" rel="noopener"
       style="background:#25D366; color:#fff; border-radius:8px;">
      <i class="fab fa-whatsapp"></i> WhatsApp
    </a>
    <a href="tel:+8801XXXXXXXXX"
       style="background:var(--btn-primary); color:#fff; border-radius:8px;">
      <i class="fas fa-phone"></i> কল করুন
    </a>
  </div>
</div>

<script>
(function () {
  var btn    = document.getElementById('hamburgerBtn');
  var nav    = document.getElementById('mobileNav');
  var header = document.getElementById('mainHeader');
  if (!btn || !nav) return;

  btn.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('show');
    btn.classList.toggle('open', isOpen);
    btn.setAttribute('aria-expanded', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      nav.classList.remove('show');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    });
  });

  document.addEventListener('click', function (e) {
    if (nav.classList.contains('show') && !btn.contains(e.target) && !nav.contains(e.target)) {
      nav.classList.remove('show');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }
  });

  function onScroll() {
    header.classList.toggle('header-scrolled', window.scrollY > 60);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>