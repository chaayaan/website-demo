<?php
/**
 * Gold Lab – Home Page
 * Primary Keyword: Gold Purity Testing Lab in Bangladesh
 */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title>Gold Purity Testing Lab in Bangladesh | Gold Lab</title>
  <meta name="description" content="Gold Lab provides accurate gold purity testing, hallmark verification, and jewellery services in Bangladesh. Fast, certified, and affordable results.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://goldlab.com/">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://goldlab.com/">
  <meta property="og:title" content="Gold Purity Testing Lab in Bangladesh | Gold Lab">
  <meta property="og:description" content="Accurate gold purity testing, hallmark verification & jewellery services in Bangladesh. Fast, certified, affordable.">
  <meta property="og:image" content="https://goldlab.com/images/og-home.jpg">
  <meta property="og:site_name" content="Gold Lab">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://goldlab.com/">
  <meta name="twitter:title" content="Gold Purity Testing Lab in Bangladesh | Gold Lab">
  <meta name="twitter:description" content="Accurate gold purity testing, hallmark verification & jewellery services in Bangladesh.">
  <meta name="twitter:image" content="https://goldlab.com/images/og-home.jpg">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="favicon.svg">

  <!-- Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
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

  <!-- Structured Data: Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Gold Lab",
    "url": "https://goldlab.com",
    "logo": "https://goldlab.com/images/logo.png",
    "description": "Professional gold testing and certification lab in Bangladesh.",
    "address": { "@type": "PostalAddress", "addressCountry": "BD", "addressLocality": "Your City" },
    "contactPoint": { "@type": "ContactPoint", "telephone": "+880-XXXXXXXXXX", "contactType": "customer service" }
  }
  </script>
</head>
<body class="font-sans antialiased">

<?php include 'header.php'; ?>

<!-- ==================== HERO ==================== -->
<section class="relative min-h-screen flex items-center overflow-hidden" aria-label="Hero">
  <div class="absolute inset-0 bg-gradient-to-br from-forest-500 via-forest-400 to-ocean-400"></div>
  <div class="absolute inset-0 opacity-10">
    <img src="index image.jpg" alt="" class="w-full h-full object-cover" loading="eager">
  </div>
  <div class="absolute top-20 right-10 w-72 h-72 bg-gold-400/10 rounded-full blur-3xl" aria-hidden="true"></div>
  <div class="absolute bottom-20 left-10 w-96 h-96 bg-forest-300/20 rounded-full blur-3xl" aria-hidden="true"></div>

  <div class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 py-32 sm:py-40">
    <div class="max-w-3xl">
      <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-8">
        <i data-lucide="shield-check" class="w-4 h-4 text-gold-400" aria-hidden="true"></i>
        <span class="text-white/90 text-xs font-medium tracking-wide uppercase">Certified & Trusted</span>
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-[1.08] tracking-[-0.04em]">
        Reliable Gold Testing & Certification <span class="text-gold-400">You Can Trust</span>
      </h1>
      <p class="mt-6 text-white/75 text-base sm:text-lg font-light leading-relaxed max-w-xl">
        At Gold Lab, we provide accurate, fast, and certified gold analysis using advanced technology. Your trust is our standard.
      </p>
      <div class="mt-10 flex flex-wrap gap-4">
        <a href="contact.php" class="inline-flex items-center gap-2 bg-gold-400 hover:bg-gold-500 text-white text-sm font-semibold px-7 py-3.5 rounded-full transition-colors duration-150 shadow-lg shadow-gold-400/25">
          <i data-lucide="flask-conical" class="w-4 h-4" aria-hidden="true"></i> Get Your Gold Tested
        </a>
        <a href="services.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white text-sm font-semibold px-7 py-3.5 rounded-full transition-colors duration-150 border border-white/20">
          View Services <i data-lucide="arrow-right" class="w-4 h-4" aria-hidden="true"></i>
        </a>
      </div>
      <div class="mt-16 grid grid-cols-3 gap-6 sm:gap-10 max-w-md">
        <div><p class="text-2xl sm:text-3xl font-bold text-white">10K+</p><p class="text-xs text-white/60 mt-1">Tests Done</p></div>
        <div><p class="text-2xl sm:text-3xl font-bold text-white">99.9%</p><p class="text-xs text-white/60 mt-1">Accuracy</p></div>
        <div><p class="text-2xl sm:text-3xl font-bold text-white">15min</p><p class="text-xs text-white/60 mt-1">Fast Results</p></div>
      </div>
    </div>
  </div>
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce" aria-hidden="true">
    <i data-lucide="chevron-down" class="w-6 h-6 text-white/40"></i>
  </div>
</section>

<!-- ==================== ABOUT PREVIEW ==================== -->
<section class="py-20 sm:py-28 bg-white" aria-labelledby="home-about-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <div class="relative">
        <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
          <img src="home.jpg" alt="Gold Lab laboratory interior with testing equipment" class="w-full h-full object-cover" loading="lazy" width="800" height="600">
        </div>
        <div class="absolute -bottom-6 -right-4 sm:right-8 bg-white rounded-xl shadow-xl p-5 border border-stone-100">
          <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center"><i data-lucide="award" class="w-6 h-6 text-forest-400" aria-hidden="true"></i></div>
            <div><p class="text-sm font-semibold text-stone-900">ISO Certified</p><p class="text-xs text-stone-500">International Standards</p></div>
          </div>
        </div>
      </div>
      <div>
        <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">Who We Are</p>
        <h2 id="home-about-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em] leading-tight">Precision. Trust. <span class="text-forest-400">Purity.</span></h2>
        <p class="mt-6 text-stone-600 text-base font-light leading-relaxed">Gold Lab is a professional gold testing and certification center dedicated to delivering precise and transparent results. We combine modern technology with expert analysis to ensure every test meets international standards.</p>
        <div class="mt-8 space-y-4">
          <div class="flex items-start gap-3"><div class="w-5 h-5 mt-0.5 rounded-full bg-forest-50 flex items-center justify-center flex-shrink-0"><i data-lucide="check" class="w-3 h-3 text-forest-400" aria-hidden="true"></i></div><p class="text-sm text-stone-600">Advanced XRF testing technology</p></div>
          <div class="flex items-start gap-3"><div class="w-5 h-5 mt-0.5 rounded-full bg-forest-50 flex items-center justify-center flex-shrink-0"><i data-lucide="check" class="w-3 h-3 text-forest-400" aria-hidden="true"></i></div><p class="text-sm text-stone-600">Certified metallurgy experts on staff</p></div>
          <div class="flex items-start gap-3"><div class="w-5 h-5 mt-0.5 rounded-full bg-forest-50 flex items-center justify-center flex-shrink-0"><i data-lucide="check" class="w-3 h-3 text-forest-400" aria-hidden="true"></i></div><p class="text-sm text-stone-600">Transparent, detailed reporting</p></div>
        </div>
        <a href="about.php" class="inline-flex items-center gap-2 text-forest-400 hover:text-forest-500 text-sm font-semibold mt-8 transition-colors duration-150">Learn More About Us <i data-lucide="arrow-right" class="w-4 h-4" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ==================== SERVICES PREVIEW ==================== -->
<section class="py-20 sm:py-28 bg-stone-50" aria-labelledby="home-services-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">Our Services</p>
      <h2 id="home-services-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em]">Complete Gold Testing Solutions</h2>
      <p class="mt-4 text-stone-500 text-base font-light">From purity testing to custom ornament making — we've got you covered.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="search" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Gold Purity Test</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Accurate karat measurement using advanced XRF technology.</p>
      </article>
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="atom" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Metal Purity Test</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Testing of various metals for composition and authenticity.</p>
      </article>
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="badge-check" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Hallmark Verification</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Verify genuine certification and prevent fraud.</p>
      </article>
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="flame" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Metal Melting</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Controlled melting for refining and processing metals.</p>
      </article>
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="zap" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Jewellery Welding</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Professional repair and joining of jewellery pieces.</p>
      </article>
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="gem" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Ornament Making</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Custom ornament creation based on your designs.</p>
      </article>
      <article class="bg-white rounded-2xl p-6 border border-stone-100 hover:shadow-lg hover:border-forest-200 transition-all duration-300 group">
        <div class="w-12 h-12 bg-forest-50 rounded-xl flex items-center justify-center mb-5 group-hover:bg-forest-400 transition-colors duration-300"><i data-lucide="link" class="w-5 h-5 text-forest-400 group-hover:text-white transition-colors duration-300" aria-hidden="true"></i></div>
        <h3 class="text-base font-semibold text-stone-900 mb-2">Bulk Chain Making</h3>
        <p class="text-sm text-stone-500 font-light leading-relaxed">Large-scale gold chain production for wholesalers.</p>
      </article>
      <div class="bg-gradient-to-br from-forest-400 to-forest-500 rounded-2xl p-6 flex flex-col justify-center items-center text-center">
        <i data-lucide="arrow-up-right" class="w-8 h-8 text-white/60 mb-4" aria-hidden="true"></i>
        <h3 class="text-base font-semibold text-white mb-2">Explore All</h3>
        <p class="text-sm text-white/70 font-light mb-5">View our complete range</p>
        <a href="services.php" class="inline-flex items-center gap-2 bg-white text-forest-500 text-xs font-semibold px-5 py-2.5 rounded-full hover:bg-gold-400 hover:text-white transition-colors duration-150">View Services</a>
      </div>
    </div>
  </div>
</section>

<!-- ==================== WHY CHOOSE US ==================== -->
<section class="py-20 sm:py-28 bg-white" aria-labelledby="home-why-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">Why Choose Us</p>
        <h2 id="home-why-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em]">Your Trusted Gold Testing Partner</h2>
        <p class="mt-6 text-stone-500 text-base font-light leading-relaxed max-w-lg">We're committed to providing the most accurate and reliable gold testing services with complete transparency.</p>
        <div class="mt-10 space-y-6">
          <div class="flex items-start gap-4"><div class="w-10 h-10 bg-gold-50 rounded-xl flex items-center justify-center flex-shrink-0"><i data-lucide="crosshair" class="w-5 h-5 text-gold-400" aria-hidden="true"></i></div><div><h3 class="text-sm font-semibold text-stone-900 mb-1">High Accuracy Equipment</h3><p class="text-sm text-stone-500 font-light">State-of-the-art XRF machines ensuring 99.9% precision.</p></div></div>
          <div class="flex items-start gap-4"><div class="w-10 h-10 bg-gold-50 rounded-xl flex items-center justify-center flex-shrink-0"><i data-lucide="user-check" class="w-5 h-5 text-gold-400" aria-hidden="true"></i></div><div><h3 class="text-sm font-semibold text-stone-900 mb-1">Certified Experts</h3><p class="text-sm text-stone-500 font-light">Our team includes certified metallurgy professionals.</p></div></div>
          <div class="flex items-start gap-4"><div class="w-10 h-10 bg-gold-50 rounded-xl flex items-center justify-center flex-shrink-0"><i data-lucide="clock" class="w-5 h-5 text-gold-400" aria-hidden="true"></i></div><div><h3 class="text-sm font-semibold text-stone-900 mb-1">Fast Turnaround</h3><p class="text-sm text-stone-500 font-light">Get results in as little as 10-15 minutes.</p></div></div>
          <div class="flex items-start gap-4"><div class="w-10 h-10 bg-gold-50 rounded-xl flex items-center justify-center flex-shrink-0"><i data-lucide="file-text" class="w-5 h-5 text-gold-400" aria-hidden="true"></i></div><div><h3 class="text-sm font-semibold text-stone-900 mb-1">Transparent Reporting</h3><p class="text-sm text-stone-500 font-light">Detailed, easy-to-understand test reports.</p></div></div>
          <div class="flex items-start gap-4"><div class="w-10 h-10 bg-gold-50 rounded-xl flex items-center justify-center flex-shrink-0"><i data-lucide="wallet" class="w-5 h-5 text-gold-400" aria-hidden="true"></i></div><div><h3 class="text-sm font-semibold text-stone-900 mb-1">Affordable Pricing</h3><p class="text-sm text-stone-500 font-light">Quality testing services that won't break the bank.</p></div></div>
        </div>
      </div>
      <div class="relative">
        <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl">
          <img src="home 2.jpg" alt="Gold testing equipment at Gold Lab" class="w-full h-full object-cover" loading="lazy" width="700" height="875">
        </div>
        <div class="absolute top-6 left-6 bg-forest-400 text-white rounded-xl px-5 py-3 shadow-lg"><p class="text-2xl font-bold">99.9%</p><p class="text-xs text-white/80">Accuracy Rate</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIALS ==================== -->
<section class="py-20 sm:py-28 bg-stone-50" aria-labelledby="home-testimonials-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">Testimonials</p>
      <h2 id="home-testimonials-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em]">What Our Customers Say</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <article class="bg-white rounded-2xl p-8 border border-stone-100">
        <div class="flex gap-1 mb-5" aria-label="5 out of 5 stars"><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i></div>
        <blockquote class="text-stone-600 text-sm font-light leading-relaxed mb-6">"Gold Lab gave me complete confidence in my jewelry purchase. The testing was thorough and the report was very detailed."</blockquote>
        <div class="flex items-center gap-3"><div class="w-10 h-10 bg-forest-100 rounded-full flex items-center justify-center"><span class="text-forest-500 text-sm font-semibold">RA</span></div><div><p class="text-sm font-semibold text-stone-900">Rahim Ahmed</p><p class="text-xs text-stone-400">Customer</p></div></div>
      </article>
      <article class="bg-white rounded-2xl p-8 border border-stone-100">
        <div class="flex gap-1 mb-5" aria-label="5 out of 5 stars"><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i></div>
        <blockquote class="text-stone-600 text-sm font-light leading-relaxed mb-6">"Fast, professional, and reliable service. I've been using Gold Lab for my business for over a year now."</blockquote>
        <div class="flex items-center gap-3"><div class="w-10 h-10 bg-forest-100 rounded-full flex items-center justify-center"><span class="text-forest-500 text-sm font-semibold">FK</span></div><div><p class="text-sm font-semibold text-stone-900">Fatima Khan</p><p class="text-xs text-stone-400">Jewellery Business Owner</p></div></div>
      </article>
      <article class="bg-white rounded-2xl p-8 border border-stone-100">
        <div class="flex gap-1 mb-5" aria-label="5 out of 5 stars"><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i><i data-lucide="star" class="w-4 h-4 text-gold-400 fill-gold-400" aria-hidden="true"></i></div>
        <blockquote class="text-stone-600 text-sm font-light leading-relaxed mb-6">"Very affordable and accurate. The staff explained everything clearly. Highly recommended for gold testing!"</blockquote>
        <div class="flex items-center gap-3"><div class="w-10 h-10 bg-forest-100 rounded-full flex items-center justify-center"><span class="text-forest-500 text-sm font-semibold">SM</span></div><div><p class="text-sm font-semibold text-stone-900">Sakib Molla</p><p class="text-xs text-stone-400">Customer</p></div></div>
      </article>
    </div>
  </div>
</section>

<!-- ==================== FAQ ==================== -->
<section class="py-20 sm:py-28 bg-white" aria-labelledby="home-faq-heading">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="max-w-3xl mx-auto">
      <div class="text-center mb-14">
        <p class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400 mb-4">FAQ</p>
        <h2 id="home-faq-heading" class="text-3xl sm:text-4xl font-bold text-stone-900 tracking-[-0.025em]">Frequently Asked Questions</h2>
      </div>
      <div class="space-y-4">
        <details class="group bg-stone-50 rounded-xl border border-stone-100 overflow-hidden">
          <summary class="flex items-center justify-between cursor-pointer p-5 sm:p-6"><span class="text-sm font-semibold text-stone-900 pr-4">Is gold testing safe?</span><i data-lucide="plus" class="w-5 h-5 text-stone-400 flex-shrink-0 group-open:hidden" aria-hidden="true"></i><i data-lucide="minus" class="w-5 h-5 text-forest-400 flex-shrink-0 hidden group-open:block" aria-hidden="true"></i></summary>
          <div class="px-5 sm:px-6 pb-5 sm:pb-6"><p class="text-sm text-stone-500 font-light leading-relaxed">Yes, we use non-destructive testing methods like XRF that don't damage your gold in any way. Your items remain completely intact throughout the process.</p></div>
        </details>
        <details class="group bg-stone-50 rounded-xl border border-stone-100 overflow-hidden">
          <summary class="flex items-center justify-between cursor-pointer p-5 sm:p-6"><span class="text-sm font-semibold text-stone-900 pr-4">How long does testing take?</span><i data-lucide="plus" class="w-5 h-5 text-stone-400 flex-shrink-0 group-open:hidden" aria-hidden="true"></i><i data-lucide="minus" class="w-5 h-5 text-forest-400 flex-shrink-0 hidden group-open:block" aria-hidden="true"></i></summary>
          <div class="px-5 sm:px-6 pb-5 sm:pb-6"><p class="text-sm text-stone-500 font-light leading-relaxed">Typically 10–15 minutes for a single item. For bulk orders, we provide a timeline based on the quantity.</p></div>
        </details>
        <details class="group bg-stone-50 rounded-xl border border-stone-100 overflow-hidden">
          <summary class="flex items-center justify-between cursor-pointer p-5 sm:p-6"><span class="text-sm font-semibold text-stone-900 pr-4">Do you provide a certificate?</span><i data-lucide="plus" class="w-5 h-5 text-stone-400 flex-shrink-0 group-open:hidden" aria-hidden="true"></i><i data-lucide="minus" class="w-5 h-5 text-forest-400 flex-shrink-0 hidden group-open:block" aria-hidden="true"></i></summary>
          <div class="px-5 sm:px-6 pb-5 sm:pb-6"><p class="text-sm text-stone-500 font-light leading-relaxed">Yes, with our Advanced Test package, you receive a digital certificate with detailed analysis. Basic tests include a standard report.</p></div>
        </details>
        <details class="group bg-stone-50 rounded-xl border border-stone-100 overflow-hidden">
          <summary class="flex items-center justify-between cursor-pointer p-5 sm:p-6"><span class="text-sm font-semibold text-stone-900 pr-4">What payment methods do you accept?</span><i data-lucide="plus" class="w-5 h-5 text-stone-400 flex-shrink-0 group-open:hidden" aria-hidden="true"></i><i data-lucide="minus" class="w-5 h-5 text-forest-400 flex-shrink-0 hidden group-open:block" aria-hidden="true"></i></summary>
          <div class="px-5 sm:px-6 pb-5 sm:pb-6"><p class="text-sm text-stone-500 font-light leading-relaxed">We accept cash, bKash, Nagad, and bank transfers. For business packages, we can arrange invoicing with flexible payment terms.</p></div>
        </details>
      </div>
    </div>
  </div>
</section>

<!-- ==================== CTA ==================== -->
<section class="py-20 sm:py-28 bg-gradient-to-br from-forest-500 via-forest-400 to-ocean-400 relative overflow-hidden" aria-label="Call to action">
  <div class="absolute top-0 right-0 w-96 h-96 bg-gold-400/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2" aria-hidden="true"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2" aria-hidden="true"></div>
  <div class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-[-0.025em] leading-tight">Don't Leave Your Gold's Value to Guesswork</h2>
      <p class="mt-6 text-white/75 text-base sm:text-lg font-light leading-relaxed">Get accurate, certified results in minutes. Protect your investment with Gold Lab.</p>
      <div class="mt-10 flex flex-wrap justify-center gap-4">
        <a href="contact.php" class="inline-flex items-center gap-2 bg-gold-400 hover:bg-gold-500 text-white text-sm font-semibold px-8 py-4 rounded-full transition-colors duration-150 shadow-lg shadow-gold-400/30"><i data-lucide="flask-conical" class="w-4 h-4" aria-hidden="true"></i> Test Your Gold Today</a>
        <a href="tel:+880XXXXXXXXXX" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white text-sm font-semibold px-8 py-4 rounded-full transition-colors duration-150 border border-white/20"><i data-lucide="phone" class="w-4 h-4" aria-hidden="true"></i> Call Us Now</a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</html>