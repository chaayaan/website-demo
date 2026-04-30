<?php
/**
 * Gold Lab – About Page
 * Primary Keyword: Trusted Gold Testing Company
 */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>About Gold Lab | Trusted Gold Testing Company</title>
  <meta name="description" content="Learn about Gold Lab — Bangladesh's trusted gold testing and certification company. Years of experience, certified experts, and 99.9% accuracy.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://goldlab.com/about.php">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://goldlab.com/about.php">
  <meta property="og:title" content="About Gold Lab | Trusted Gold Testing Company">
  <meta property="og:description" content="Bangladesh's trusted gold testing company. Certified experts, 99.9% accuracy, and years of experience.">
  <meta property="og:image" content="https://goldlab.com/images/og-about.jpg">
  <meta property="og:site_name" content="Gold Lab">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://goldlab.com/about.php">
  <meta name="twitter:title" content="About Gold Lab | Trusted Gold Testing Company">
  <meta name="twitter:description" content="Bangladesh's trusted gold testing company. Certified experts, 99.9% accuracy.">
  <meta name="twitter:image" content="https://goldlab.com/images/og-about.jpg">

  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
          colors: {
            gold: { 50:'#FDF8E8',100:'#F9EDC4',200:'#F0D98A',300:'#E5C24F',400:'#D4AF37',500:'#C49B2B',600:'#A67C1F',700:'#7D5C18',800:'#5A4212',900:'#3D2D0C' },
            forest: { 50:'#E8F5EF',100:'#C6E6D4',200:'#8FD4A8',300:'#5FCF97',400:'#2AA276',500:'#1F5C45',600:'#1A4D3A',700:'#153D2F',800:'#102D24',900:'#0B1E19' },
            ocean: { 400:'#84CAE7',500:'#70B1D4',600:'#5C98C0',700:'#336699',800:'#2E5D8B' }
          }
        }
      }
    }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "About Gold Lab",
    "url": "https://goldlab.com/about.php",
    "description": "Learn about Gold Lab — Bangladesh's trusted gold testing and certification company.",
    "mainEntity": {
      "@type": "Organization",
      "name": "Gold Lab",
      "url": "https://goldlab.com",
      "foundingDate": "2021",
      "slogan": "Precision. Trust. Purity."
    }
  }
  </script>
</head>
<body class="font-sans antialiased">

<?php include 'header.php'; ?>

<!-- PAGE HERO -->
<section class="relative pt-32 sm:pt-40 pb-20 sm:pb-28 overflow-hidden" aria-label="Page introduction">
  <div class="absolute inset-0 bg-gradient-to-br from-forest-500 via-forest-400 to-ocean-400"></div>
  <div class="absolute top-10 right-20 w-64 h-64 bg-gold-400/10 rounded-full blur-3xl" aria-hidden="true"></div>
  <div class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 text-center">
    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-6">
      <i data-lucide="info" class="w-4 h-4 text-gold-400" aria-hidden="true"></i>
      <span class="text-white/90 text-xs font-medium tracking-wide uppercase">About Us</span>
    </div>
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-[-0.04em]">About <span class="text-gold-400">Gold Lab</span></h1>
    <p class="mt-5 text-white/70 text-base sm:text-lg font-light max-w-xl mx-auto leading-relaxed">Bringing transparency and trust to the gold industry since day one.</p>
  </div>
</section>

<!-- ABOUT CONTENT -->
<section class="py-20 sm:py-28 bg-white" aria-labelledby="about-story-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <div class="relative">
        <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
          <img src="home.jpg" alt="Gold Lab interior with testing equipment and staff" class="w-full h-full object-cover" loading="lazy" width="800" height="600">
        </div>
        <div class="absolute -bottom-6 left-6 bg-gold-400 text-white rounded-xl px-6 py-4 shadow-lg"><p class="text-3xl font-bold">5+</p><p class="text-xs text-white/80">Years of Experience</p></div>
      </div>
      <div>
        <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">Our Story</p>
        <h2 id="about-story-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em] leading-tight">Trust Built Through <span class="text-forest-400">Precision</span></h2>
        <p class="mt-6 text-stone-600 text-base font-light leading-relaxed">Gold Lab was established with a mission to bring transparency and trust to the gold industry. With years of experience and cutting-edge technology, we ensure that every customer receives precise and reliable results.</p>
        <p class="mt-4 text-stone-600 text-base font-light leading-relaxed">Our lab follows strict quality control procedures and industry standards to deliver unmatched accuracy. We believe every customer deserves to know the true value of their gold.</p>
        <div class="mt-8 grid grid-cols-3 gap-6">
          <div class="text-center p-4 bg-stone-50 rounded-xl"><p class="text-2xl font-bold text-forest-400">10K+</p><p class="text-xs text-stone-500 mt-1">Tests Completed</p></div>
          <div class="text-center p-4 bg-stone-50 rounded-xl"><p class="text-2xl font-bold text-forest-400">5K+</p><p class="text-xs text-stone-500 mt-1">Happy Clients</p></div>
          <div class="text-center p-4 bg-stone-50 rounded-xl"><p class="text-2xl font-bold text-forest-400">99.9%</p><p class="text-xs text-stone-500 mt-1">Accuracy</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section class="py-20 sm:py-28 bg-stone-50" aria-labelledby="about-mission-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid md:grid-cols-2 gap-8">
      <article class="bg-white rounded-2xl p-8 sm:p-10 border border-stone-100">
        <div class="w-14 h-14 bg-forest-50 rounded-2xl flex items-center justify-center mb-6"><i data-lucide="target" class="w-7 h-7 text-forest-400" aria-hidden="true"></i></div>
        <h2 id="about-mission-heading" class="text-xl font-bold text-stone-900 mb-4">Our Mission</h2>
        <p class="text-stone-600 text-base font-light leading-relaxed">To provide accurate and trustworthy gold testing services accessible to everyone. We aim to set the standard for transparency in the gold industry by combining advanced technology with expert craftsmanship.</p>
      </article>
      <article class="bg-gradient-to-br from-forest-400 to-forest-500 rounded-2xl p-8 sm:p-10">
        <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-6"><i data-lucide="eye" class="w-7 h-7 text-gold-400" aria-hidden="true"></i></div>
        <h2 class="text-xl font-bold text-white mb-4">Our Vision</h2>
        <p class="text-white/80 text-base font-light leading-relaxed">To become the most trusted gold testing brand in the region — where every customer walks in with doubt and walks out with absolute confidence in the value of their gold.</p>
      </article>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="py-20 sm:py-28 bg-white" aria-labelledby="about-values-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">Our Values</p>
      <h2 id="about-values-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em]">What Drives Us Every Day</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <article class="text-center p-6 rounded-2xl border border-stone-100 hover:shadow-lg transition-all duration-300">
        <div class="w-14 h-14 bg-gold-50 rounded-2xl flex items-center justify-center mx-auto mb-5"><i data-lucide="shield-check" class="w-7 h-7 text-gold-400" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Integrity</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Honest results, every single time. No compromises.</p>
      </article>
      <article class="text-center p-6 rounded-2xl border border-stone-100 hover:shadow-lg transition-all duration-300">
        <div class="w-14 h-14 bg-gold-50 rounded-2xl flex items-center justify-center mx-auto mb-5"><i data-lucide="microscope" class="w-7 h-7 text-gold-400" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Precision</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">99.9% accuracy using world-class equipment.</p>
      </article>
      <article class="text-center p-6 rounded-2xl border border-stone-100 hover:shadow-lg transition-all duration-300">
        <div class="w-14 h-14 bg-gold-50 rounded-2xl flex items-center justify-center mx-auto mb-5"><i data-lucide="heart-handshake" class="w-7 h-7 text-gold-400" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Trust</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Building lasting relationships through transparency.</p>
      </article>
      <article class="text-center p-6 rounded-2xl border border-stone-100 hover:shadow-lg transition-all duration-300">
        <div class="w-14 h-14 bg-gold-50 rounded-2xl flex items-center justify-center mx-auto mb-5"><i data-lucide="sparkles" class="w-7 h-7 text-gold-400" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Excellence</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Continuously improving our technology and service.</p>
      </article>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 sm:py-28 bg-gradient-to-br from-forest-500 via-forest-400 to-ocean-400 relative overflow-hidden" aria-label="Call to action">
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold-400/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2" aria-hidden="true"></div>
  <div class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-[-0.025em] leading-tight">Ready to Test Your Gold?</h2>
      <p class="mt-5 text-white/75 text-base font-light leading-relaxed">Book a test today and experience the Gold Lab difference.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a href="contact.php" class="inline-flex items-center gap-2 bg-gold-400 hover:bg-gold-500 text-white text-sm font-semibold px-8 py-4 rounded-full transition-colors duration-150 shadow-lg shadow-gold-400/30"><i data-lucide="flask-conical" class="w-4 h-4" aria-hidden="true"></i> Book a Test</a>
        <a href="pricing.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white text-sm font-semibold px-8 py-4 rounded-full transition-colors duration-150 border border-white/20">View Pricing <i data-lucide="arrow-right" class="w-4 h-4" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</html>