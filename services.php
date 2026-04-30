<?php
/**
 * Gold Lab – Services Page
 * Primary Keyword: Gold Testing & Jewellery Services
 */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Gold Testing & Jewellery Services | Gold Lab</title>
  <meta name="description" content="Explore Gold Lab's complete gold services — purity testing, hallmark verification, metal melting, jewellery welding, and ornament making in Bangladesh.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://goldlab.com/services.php">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://goldlab.com/services.php">
  <meta property="og:title" content="Gold Testing & Jewellery Services | Gold Lab">
  <meta property="og:description" content="Complete gold services: purity testing, hallmark verification, metal melting, jewellery welding & more in Bangladesh.">
  <meta property="og:image" content="https://goldlab.com/images/og-services.jpg">
  <meta property="og:site_name" content="Gold Lab">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://goldlab.com/services.php">
  <meta name="twitter:title" content="Gold Testing & Jewellery Services | Gold Lab">
  <meta name="twitter:description" content="Complete gold services: purity testing, hallmark, melting, welding & more in Bangladesh.">
  <meta name="twitter:image" content="https://goldlab.com/images/og-services.jpg">

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
    "@type": "ItemList",
    "name": "Gold Lab Services",
    "url": "https://goldlab.com/services.php",
    "numberOfItems": 7,
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Gold Purity Test", "url": "https://goldlab.com/services.php#gold-purity-test" },
      { "@type": "ListItem", "position": 2, "name": "Metal Purity Test", "url": "https://goldlab.com/services.php#metal-purity-test" },
      { "@type": "ListItem", "position": 3, "name": "Hallmark Verification", "url": "https://goldlab.com/services.php#hallmark-verification" },
      { "@type": "ListItem", "position": 4, "name": "Metal Melting", "url": "https://goldlab.com/services.php#metal-melting" },
      { "@type": "ListItem", "position": 5, "name": "Jewellery Welding", "url": "https://goldlab.com/services.php#jewellery-welding" },
      { "@type": "ListItem", "position": 6, "name": "Ornament Making", "url": "https://goldlab.com/services.php#ornament-making" },
      { "@type": "ListItem", "position": 7, "name": "Bulk Gold Chain Making", "url": "https://goldlab.com/services.php#bulk-chain-making" }
    ]
  }
  </script>
</head>
<body class="font-sans antialiased">

<?php include 'header.php'; ?>

<!-- PAGE HERO -->
<section class="relative pt-32 sm:pt-40 pb-20 sm:pb-28 overflow-hidden" aria-label="Page introduction">
  <div class="absolute inset-0 bg-gradient-to-br from-forest-500 via-forest-400 to-ocean-400"></div>
  <div class="absolute top-10 left-20 w-64 h-64 bg-gold-400/10 rounded-full blur-3xl" aria-hidden="true"></div>
  <div class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 text-center">
    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-6">
      <i data-lucide="settings" class="w-4 h-4 text-gold-400" aria-hidden="true"></i>
      <span class="text-white/90 text-xs font-medium tracking-wide uppercase">Our Services</span>
    </div>
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-[-0.04em]">Complete Gold <span class="text-gold-400">Services</span></h1>
    <p class="mt-5 text-white/70 text-base sm:text-lg font-light max-w-xl mx-auto leading-relaxed">From testing to crafting — everything your gold needs under one roof.</p>
  </div>
</section>

<!-- ALL SERVICES -->
<section class="py-20 sm:py-28 bg-white" aria-label="Service details">
  <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10">
    <div class="space-y-8">

      <article id="gold-purity-test" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden"><img src="https://picsum.photos/seed/svc-purity/700/440.jpg" alt="Gold purity testing using XRF machine at Gold Lab" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div>
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="search" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">01</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Gold Purity Test</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">We analyze the purity of gold using advanced XRF testing methods to ensure accurate karat measurement. Our non-destructive testing preserves your gold while delivering results you can rely on.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Non-destructive XRF testing</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Accurate karat measurement (14K, 18K, 22K, 24K)</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Results in 10-15 minutes</li>
          </ul>
        </div>
      </article>

      <article id="metal-purity-test" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden order-2 lg:order-1"><img src="https://picsum.photos/seed/svc-metal/700/440.jpg" alt="Metal purity analysis equipment" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div class="order-1 lg:order-2">
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="atom" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">02</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Metal Purity Test</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">Testing of various metals to determine composition and authenticity. Whether it's silver, platinum, or mixed alloys — we provide precise analysis for any metal type.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Multi-metal analysis support</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Composition breakdown report</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Suitable for all metal types</li>
          </ul>
        </div>
      </article>

      <article id="hallmark-verification" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden"><img src="https://picsum.photos/seed/svc-hallmark/700/440.jpg" alt="Hallmark verification on gold jewellery" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div>
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="badge-check" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">03</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Ornament / Jewellery Hallmark</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">Verification of hallmarks to ensure genuine certification and prevent fraud. We help you confirm that your jewellery carries authentic hallmarks as per government standards.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> BIS hallmark verification</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Fraud detection & prevention</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Official certification support</li>
          </ul>
        </div>
      </article>

      <article id="metal-melting" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden order-2 lg:order-1"><img src="https://picsum.photos/seed/svc-melting/700/440.jpg" alt="Controlled metal melting furnace" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div class="order-1 lg:order-2">
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="flame" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">04</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Metal Melting</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">Controlled melting services for refining and processing metals. Our high-temperature furnaces ensure precise melting with minimal loss.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> High-temperature precision furnaces</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Minimal metal loss during process</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Suitable for gold, silver & more</li>
          </ul>
        </div>
      </article>

      <article id="jewellery-welding" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden"><img src="https://picsum.photos/seed/svc-welding/700/440.jpg" alt="Laser jewellery welding service" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div>
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="zap" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">05</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Ornament / Jewellery Welding</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">Professional welding services for repairing and joining jewellery pieces. Laser welding ensures precision without damaging surrounding areas.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Laser welding technology</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Invisible repair joints</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> All jewellery types supported</li>
          </ul>
        </div>
      </article>

      <article id="ornament-making" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden order-2 lg:order-1"><img src="https://picsum.photos/seed/svc-ornament/700/440.jpg" alt="Custom gold ornament making" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div class="order-1 lg:order-2">
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="gem" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">06</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Ornament Making</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">Custom ornament creation based on client design and requirements. Our skilled craftsmen bring your vision to life with meticulous attention to detail.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Custom design to order</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Expert craftsmanship</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Traditional & modern designs</li>
          </ul>
        </div>
      </article>

      <article id="bulk-chain-making" class="grid lg:grid-cols-2 gap-8 items-center bg-stone-50 rounded-2xl p-6 sm:p-8 border border-stone-100">
        <div class="aspect-[16/10] rounded-xl overflow-hidden"><img src="https://picsum.photos/seed/svc-chain/700/440.jpg" alt="Bulk gold chain manufacturing" class="w-full h-full object-cover" loading="lazy" width="700" height="440"></div>
        <div>
          <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-forest-400 rounded-xl flex items-center justify-center"><i data-lucide="link" class="w-5 h-5 text-white" aria-hidden="true"></i></div><span class="text-xs font-semibold tracking-[0.1em] uppercase text-forest-400">07</span></div>
          <h2 class="text-xl sm:text-2xl font-bold text-stone-900 mb-3">Bulk Gold Chain Making</h2>
          <p class="text-stone-600 text-sm font-light leading-relaxed mb-5">Large-scale production of gold chains for businesses and wholesalers. Consistent quality with competitive pricing for bulk orders.</p>
          <ul class="space-y-2">
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Bulk production capacity</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Consistent quality assurance</li>
            <li class="flex items-center gap-2 text-sm text-stone-500 font-light"><i data-lucide="check-circle-2" class="w-4 h-4 text-forest-400 flex-shrink-0" aria-hidden="true"></i> Wholesale pricing available</li>
          </ul>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 sm:py-28 bg-gradient-to-br from-forest-500 via-forest-400 to-ocean-400 relative overflow-hidden" aria-label="Call to action">
  <div class="absolute top-0 right-0 w-96 h-96 bg-gold-400/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2" aria-hidden="true"></div>
  <div class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-10 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-[-0.025em] leading-tight">Need a Custom Service?</h2>
      <p class="mt-5 text-white/75 text-base font-light leading-relaxed">Contact us to discuss your specific requirements. We're here to help.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a href="contact.php" class="inline-flex items-center gap-2 bg-gold-400 hover:bg-gold-500 text-white text-sm font-semibold px-8 py-4 rounded-full transition-colors duration-150 shadow-lg shadow-gold-400/30"><i data-lucide="message-circle" class="w-4 h-4" aria-hidden="true"></i> Contact Us</a>
        <a href="pricing.php" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 text-white text-sm font-semibold px-8 py-4 rounded-full transition-colors duration-150 border border-white/20">View Pricing <i data-lucide="arrow-right" class="w-4 h-4" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</html>