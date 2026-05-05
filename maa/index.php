<?php
// ============================================================
// MAA GOLD LAB — Single-File PHP Website (Updated Images)
// ============================================================

// ── Page Router ─────────────────────────────────────────────
 $page = $_GET['page'] ?? 'home';
 $allowed = ['home', 'about', 'services', 'gallery', 'verify', 'contact'];
if (!in_array($page, $allowed)) $page = 'home';

// ── Services Data (Updated with new filenames) ───────────────────
 $services = [
    [
        'id'          => 'gold-testing',
        'title'       => 'Gold Testing',
        'title_accent'=> 'Testing',
        'icon'        => '⚖️',
        'svg_icon'    => 'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5',
        'short'       => 'Precise gold purity analysis using advanced XRF technology.',
        'description' => 'We use state-of-the-art X-Ray Fluorescence (XRF) technology to determine the exact purity and karat value of any gold item — non-destructively and instantly.',
        'features'    => ['Accurate purity detection', 'Non-destructive testing', 'Instant digital results', 'Suitable for all gold items'],
        'image'       => 'gold testing.png', 
        'image_alt'   => 'XRF Gold Testing Machine',
    ],
    [
        'id'          => 'metal-testing',
        'title'       => 'Metal Testing',
        'title_accent'=> 'Testing',
        'icon'        => '🔬',
        'svg_icon'    => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
        'short'       => 'Composition and quality testing of various metals.',
        'description' => 'Our advanced laboratory methods identify metal composition, detect impurities, and verify quality for both industrial and jewellery-grade metals.',
        'features'    => ['Identify metal composition', 'Detect impurities', 'Industrial & jewellery metals', 'Advanced laboratory methods'],
        'image'       => 'metal testing.png', 
        'image_alt'   => 'Microscope for Metal Analysis',
    ],
    [
        'id'          => 'hallmarking',
        'title'       => 'Jewellery Hallmarking',
        'title_accent'=> 'Hallmarking',
        'icon'        => '💍',
        'svg_icon'    => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
        'short'       => 'BIS hallmarking as per standards for authenticity and trust.',
        'description' => 'Government-authorised BIS hallmarking that permanently certifies the purity of your jewellery, ensuring legal compliance and consumer confidence.',
        'features'    => ['BIS hallmarking as per standards', 'Permanent & accurate marking', 'Builds customer confidence', 'Ensures purity & legality'],
        'image'       => 'jewellery hallmarking.png', 
        'image_alt'   => 'Hallmarking gold ring 916',
    ],
    [
        'id'          => 'metal-melting',
        'title'       => 'Metal Melting',
        'title_accent'=> 'Melting',
        'icon'        => '🔥',
        'svg_icon'    => 'M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z',
        'short'       => 'Refining and reshaping metals with high-heat processing.',
        'description' => 'Our high-temperature melting furnaces enable safe and precise refining, reshaping, and purification of gold and other precious metals.',
        'features'    => ['High-temperature melting', 'Safe and controlled process', 'Pure & refined output', 'Custom shapes & sizes'],
        'image'       => 'metal melting.png', 
        'image_alt'   => 'Molten gold metal melting',
    ],
    [
        'id'          => 'ornament-repair',
        'title'       => 'Ornament Repair',
        'title_accent'=> 'Repair',
        'icon'        => '🔧',
        'svg_icon'    => 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z',
        'short'       => 'Professional jewellery welding and repair services.',
        'description' => 'From crack repair to full restoration, our skilled craftsmen use precision laser welding and soldering to bring your treasured ornaments back to life.',
        'features'    => ['Crack & break repair', 'Laser welding & soldering', 'Polishing & finishing', 'Skilled craftsmanship'],
        'image'       => 'ornament repair.png', 
        'image_alt'   => 'Jewellery repair and welding',
    ],
    [
        'id'          => 'gold-exchange',
        'title'       => 'Gold Exchange Evaluation',
        'title_accent'=> 'Evaluation',
        'icon'        => '⚖',
        'svg_icon'    => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3',
        'short'       => 'Fair valuation before selling or exchanging your gold.',
        'description' => 'Get the best value for your gold with our live-rate evaluation service. We provide accurate weight measurements and transparent calculations before every transaction.',
        'features'    => ['Accurate weight measurement', 'Live gold rate evaluation', 'Transparent calculation', 'Best value assurance'],
        'image'       => 'gold exchange evaluation.png', 
        'image_alt'   => 'Gold weighing scale evaluation',
    ],
];

// ── Machines Data ─────────────────────────────────────────────
 $machines = [
    ['name' => 'XRF Gold Tester',          'icon' => '📡'],
    ['name' => 'Digital Weighing Scale',    'icon' => '⚖️'],
    ['name' => 'Microscope for Examination','icon' => '🔬'],
    ['name' => 'Hallmarking Machine',       'icon' => '🔖'],
    ['name' => 'Melting Furnace',           'icon' => '🔥'],
];

// ── Testimonials ──────────────────────────────────────────────
 $testimonials = [
    ['name' => 'Rashid Ahmed',    'role' => 'Customer',          'stars' => 5, 'text' => 'Excellent service! Very accurate results and a very professional team. Highly recommended!'],
    ['name' => 'Farhana Sultana', 'role' => 'Jewellery Business', 'stars' => 5, 'text' => 'I always trust MAA GOLD LAB for gold testing. Highly recommended for any jeweller.'],
    ['name' => 'Sakib Hasan',     'role' => 'Customer',          'stars' => 5, 'text' => 'Quick service and a transparent process. Very satisfied with the results!'],
    ['name' => 'Papia Rani',      'role' => 'Customer',          'stars' => 5, 'text' => 'Best gold testing lab with advanced machines. Truly the best in the area!'],
];

// ── FAQs ──────────────────────────────────────────────────────
 $faqs = [
    ['q' => 'How long does gold testing take?',      'a' => 'Most tests are completed within 15–30 minutes using our advanced XRF machines.'],
    ['q' => 'Is your testing report certified?',     'a' => 'Yes, every report carries our official seal, a unique Report ID, and a digital signature for full authenticity.'],
    ['q' => 'Can I verify my report online?',        'a' => 'Absolutely! Use our Verify Report page and enter your unique Report ID to instantly confirm authenticity.'],
    ['q' => 'Do you test other metals too?',         'a' => 'Yes, we test silver, platinum, and various industrial metals in addition to gold.'],
    ['q' => 'Do you offer hallmarking services?',    'a' => 'Yes, we provide BIS-standard hallmarking for all types of gold jewellery.'],
];

// ── Values (About) ────────────────────────────────────────────
 $values = [
    ['name' => 'Integrity',   'icon' => '🤝', 'desc' => 'We operate with honesty and full responsibility in every test.'],
    ['name' => 'Quality',     'icon' => '🏆', 'desc' => 'We maintain the highest quality standards in every result.'],
    ['name' => 'Innovation',  'icon' => '💡', 'desc' => 'We use advanced technology for the most precise outcomes.'],
    ['name' => 'Excellence',  'icon' => '⭐', 'desc' => 'We strive for excellence in everything we do.'],
    ['name' => 'Trust',       'icon' => '🛡️', 'desc' => 'We build long-term relationships based on trust.'],
];

// ── Gallery Images (Updated with new filenames) ───────────────────
 $gallery_images = [
    ['src' => 'gold testing.png',             'alt' => 'XRF Gold Testing Machine', 'caption' => 'XRF Gold Tester'],
    ['src' => 'jewellery hallmarking.png',    'alt' => 'Gold Hallmarking',         'caption' => 'Hallmarking Process'],
    ['src' => 'metal melting.png',            'alt' => 'Metal Melting',            'caption' => 'Metal Melting Furnace'],
    ['src' => 'metal testing.png',            'alt' => 'Metal Analysis Lab',       'caption' => 'Metal Testing Lab'],
    ['src' => 'ornament repair.png',          'alt' => 'Ornament Repair',          'caption' => 'Jewellery Repair Studio'],
    ['src' => 'lab interior.png',             'alt' => 'Lab Interior',             'caption' => 'Our Lab Facility'],
    ['src' => 'machines equipment.png',       'alt' => 'Advanced Equipment',       'caption' => 'Lab Equipment'],
    ['src' => 'decorative images.png',        'alt' => 'Decorative',               'caption' => 'Gallery View'],
];

// ── Nav Links ─────────────────────────────────────────────────
 $nav_links = [
    ['href' => '?page=home',     'label' => 'Home'],
    ['href' => '?page=services', 'label' => 'Services', 'dropdown' => true],
    ['href' => '?page=about',    'label' => 'About'],
    ['href' => '?page=gallery',  'label' => 'Gallery'],
    ['href' => '?page=verify',   'label' => 'Verify Report'],
    ['href' => '?page=contact',  'label' => 'Contact'],
];

 $service_dropdown = ['Gold Testing','Metal Testing','Hallmarking','Metal Melting','Ornament Repair','Gold Exchange'];

// ── Page Titles ───────────────────────────────────────────────
 $page_titles = [
    'home'     => 'MAA GOLD LAB — Purity You Can Trust',
    'about'    => 'About Us — MAA GOLD LAB',
    'services' => 'Our Services — MAA GOLD LAB',
    'gallery'  => 'Gallery — MAA GOLD LAB',
    'verify'   => 'Verify Report — MAA GOLD LAB',
    'contact'  => 'Contact — MAA GOLD LAB',
];

// ── Verify Report Logic ───────────────────────────────────────
 $verify_result = null;
 $verify_error  = null;
if ($page === 'verify' && !empty($_POST['report_id'])) {
    $rid = strtoupper(trim($_POST['report_id']));
    // Demo: one hardcoded authentic report
    if ($rid === 'MAA26G0515001') {
        $verify_result = [
            'customer'   => 'Rashid Ahmed',
            'test_type'  => 'Gold Purity Testing',
            'purity'     => '22.75K (94.79%)',
            'date'       => '15 May 2026, 11:45 AM',
            'report_id'  => 'MAA26G0515001',
            'status'     => 'Authentic Report',
        ];
    } else {
        $verify_error = 'No report found for ID: ' . htmlspecialchars($rid) . '. Please check and try again.';
    }
}

// ── Contact Form Logic ────────────────────────────────────────
 $contact_success = false;
if ($page === 'contact' && $_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['full_name'])) {
    // In production: send email / save to DB here
    $contact_success = true;
}

// ── Helper: Stars ──────────────────────────────────────────────
function stars(int $n): string {
    return str_repeat('★', $n) . str_repeat('☆', 5 - $n);
}

// ── Helper: Active Nav ────────────────────────────────────────
function active(string $p, string $current): string {
    return $p === $current ? ' class="active"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_titles[$page] ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
/* ═══════════════════════════════════════════════════════════════
   CSS VARIABLES & RESET
═══════════════════════════════════════════════════════════════ */
:root {
  --gold:       #B8860B;
  --gold-light: #D4A017;
  --gold-pale:  #F5EDD3;
  --gold-line:  #C9A84C;
  --green:      #2D5016;
  --green-mid:  #3D6B1F;
  --green-soft: #4A7C23;
  --cream:      #FAFAF7;
  --white:      #FFFFFF;
  --text-dark:  #1A1A1A;
  --text-mid:   #444444;
  --text-soft:  #777777;
  --border:     #E8E0D0;
  --shadow-sm:  0 2px 12px rgba(0,0,0,.06);
  --shadow-md:  0 6px 30px rgba(0,0,0,.10);
  --shadow-lg:  0 16px 60px rgba(0,0,0,.14);
  --radius:     12px;
  --radius-lg:  20px;
  --ff-display: 'Playfair Display', Georgia, serif;
  --ff-body:    'DM Sans', sans-serif;
  --transition: .25s cubic-bezier(.4,0,.2,1);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: var(--ff-body);
  background: var(--cream);
  color: var(--text-dark);
  line-height: 1.6;
  font-size: 15px;
}
img { max-width: 100%; display: block; }
a { color: inherit; text-decoration: none; }
button, input, select, textarea {
  font-family: inherit;
  font-size: inherit;
}

/* ═══════════════════════════════════════════════════════════════
   TYPOGRAPHY HELPERS
═══════════════════════════════════════════════════════════════ */
.section-label {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: .15em;
  text-transform: uppercase;
  color: var(--gold);
  display: block;
  margin-bottom: 10px;
}
.section-title {
  font-family: var(--ff-display);
  font-size: clamp(26px, 4vw, 42px);
  font-weight: 700;
  color: var(--text-dark);
  line-height: 1.2;
}
.section-title .accent { color: var(--gold); }
.section-sub {
  color: var(--text-soft);
  font-size: 15px;
  max-width: 560px;
  margin: 10px auto 0;
}
.text-center { text-align: center; }
.divider {
  width: 48px; height: 3px;
  background: linear-gradient(90deg, var(--gold), var(--gold-light));
  border-radius: 2px;
  margin: 14px 0 24px;
}
.divider.center { margin: 14px auto 24px; }

/* ═══════════════════════════════════════════════════════════════
   LAYOUT
═══════════════════════════════════════════════════════════════ */
.container {
  max-width: 1160px;
  margin: 0 auto;
  padding: 0 24px;
}
.section { padding: 80px 0; }
.section-sm { padding: 56px 0; }

/* ═══════════════════════════════════════════════════════════════
   BUTTONS
═══════════════════════════════════════════════════════════════ */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 13px 28px;
  border-radius: var(--radius);
  font-weight: 600;
  font-size: 14px;
  letter-spacing: .02em;
  border: none;
  cursor: pointer;
  transition: var(--transition);
  white-space: nowrap;
}
.btn-primary {
  background: linear-gradient(135deg, var(--green), var(--green-mid));
  color: var(--white);
  box-shadow: 0 4px 18px rgba(45,80,22,.28);
}
.btn-primary:hover {
  background: linear-gradient(135deg, var(--green-mid), var(--green-soft));
  transform: translateY(-1px);
  box-shadow: 0 6px 24px rgba(45,80,22,.36);
}
.btn-outline {
  background: transparent;
  color: var(--text-dark);
  border: 1.5px solid var(--border);
}
.btn-outline:hover {
  border-color: var(--gold);
  color: var(--gold);
}
.btn-gold {
  background: linear-gradient(135deg, var(--gold), var(--gold-light));
  color: var(--white);
  box-shadow: 0 4px 18px rgba(184,134,11,.30);
}
.btn-gold:hover { opacity: .92; transform: translateY(-1px); }

/* ═══════════════════════════════════════════════════════════════
   TOP BAR
═══════════════════════════════════════════════════════════════ */
.topbar {
  background: var(--green);
  color: rgba(255,255,255,.85);
  font-size: 12px;
  padding: 7px 0;
  text-align: right;
}
.topbar .container { display: flex; justify-content: flex-end; align-items: center; gap: 20px; }
.topbar a { color: rgba(255,255,255,.85); transition: var(--transition); }
.topbar a:hover { color: var(--gold-light); }
.topbar-loc { display: flex; align-items: center; gap: 5px; }

/* ═══════════════════════════════════════════════════════════════
   HEADER / NAV
═══════════════════════════════════════════════════════════════ */
.header {
  background: var(--white);
  position: sticky; top: 0; z-index: 100;
  box-shadow: 0 1px 0 var(--border), var(--shadow-sm);
  padding: 0;
}
.header-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 0;
}
/* Logo */
.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}
.logo-icon {
  width: 42px; height: 42px;
  background: linear-gradient(135deg, var(--gold), var(--gold-light));
  border-radius: 10px;
  display: grid; place-items: center;
  flex-shrink: 0;
}
.logo-icon svg { width: 22px; height: 22px; fill: var(--white); }
.logo-text h1 {
  font-family: var(--ff-display);
  font-size: 18px;
  font-weight: 700;
  color: var(--text-dark);
  line-height: 1.1;
  letter-spacing: .02em;
}
.logo-text h1 span { color: var(--gold); }
.logo-text p {
  font-size: 10px;
  color: var(--text-soft);
  letter-spacing: .12em;
  text-transform: uppercase;
  margin-top: 2px;
}
/* Nav */
.nav { display: flex; align-items: center; gap: 4px; }
.nav-item { position: relative; }
.nav-link {
  padding: 8px 13px;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 500;
  color: var(--text-mid);
  transition: var(--transition);
  display: flex; align-items: center; gap: 4px;
}
.nav-link:hover,
.nav-item.active .nav-link {
  color: var(--green);
  background: rgba(45,80,22,.06);
}
.nav-item.active .nav-link { color: var(--gold); font-weight: 600; }
/* Dropdown */
.dropdown {
  position: absolute;
  top: calc(100% + 6px);
  left: 50%; transform: translateX(-50%);
  background: var(--white);
  border-radius: var(--radius);
  box-shadow: var(--shadow-md);
  border: 1px solid var(--border);
  min-width: 200px;
  padding: 8px 0;
  opacity: 0; visibility: hidden;
  transform: translateX(-50%) translateY(-6px);
  transition: var(--transition);
  z-index: 200;
}
.nav-item:hover .dropdown {
  opacity: 1; visibility: visible;
  transform: translateX(-50%) translateY(0);
}
.dropdown a {
  display: block;
  padding: 9px 18px;
  font-size: 13px;
  color: var(--text-mid);
  transition: var(--transition);
}
.dropdown a:hover {
  background: var(--gold-pale);
  color: var(--green);
  padding-left: 22px;
}
.chevron {
  width: 14px; height: 14px;
  display: inline-block;
  transition: var(--transition);
}
.nav-item:hover .chevron { transform: rotate(180deg); }
/* Hamburger */
.hamburger { display: none; }

/* ═══════════════════════════════════════════════════════════════
   HERO SECTION — Background Image Style
═══════════════════════════════════════════════════════════════ */
.hero {
  background: #FFFFFF;
  position: relative;
  min-height: 520px;
  display: flex;
  align-items: center;
  overflow: hidden;
  padding: 60px 0;

  /* Background Image */
  background-image: url('hero image.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Dark overlay for text readability */
.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    225deg,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0) 25%,
    rgba(0, 0, 0, 0.15) 40%,
    rgba(0, 0, 0, 0.5) 60%,
    rgba(0, 0, 0, 0.8) 75%,
    rgba(0, 0, 0, 1) 100%
  );
  z-index: 1;
}

/* Break container free — start from screen left */
.hero > .container {
  max-width: 100%;
  margin: 0;
  padding-left: 200px;
  padding-right: 24px;
  position: relative;
  z-index: 2;
}

.hero-inner {
  display: grid;
  grid-template-columns: 1fr;
  max-width: 640px;
}

/* LEFT: Text Content */
.hero-content {
  max-width: 100%;
}

.hero-label {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: .18em;
  text-transform: uppercase;
  color: var(--gold-light);
  margin-bottom: 18px;
}
.hero-label span {
  display: inline-block;
  width: 4px; height: 4px;
  border-radius: 50%;
  background: var(--gold-light);
}

.hero h2 {
  font-family: var(--ff-display);
  font-size: clamp(2.6rem, 4.5vw, 3.8rem);
  font-weight: 700;
  line-height: 1.1;
  color: var(--white);
  margin-bottom: 18px;
  text-align: left;
}
.hero h2 .accent {
  color: var(--gold-light);
}

.hero-sub {
  font-size: 15px;
  line-height: 1.7;
  color: rgba(255, 255, 255, .85);
  margin-bottom: 32px;
  max-width: 480px;
  text-align: left;
}

/* Buttons */
.hero-btns {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  margin-bottom: 48px;
  justify-content: flex-start;
}

.btn-hero-primary {
  background: var(--gold);
  color: #FFFFFF;
  padding: 14px 28px;
  font-size: 14px;
  font-weight: 600;
  border-radius: var(--radius);
  border: none;
  cursor: pointer;
  transition: var(--transition);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  box-shadow: 0 4px 18px rgba(184, 134, 11, .40);
}
.btn-hero-primary:hover {
  background: var(--gold-light);
  transform: translateY(-2px);
  box-shadow: 0 6px 24px rgba(184, 134, 11, .50);
}

.btn-hero-outline {
  background: transparent;
  color: var(--white);
  border: 1.5px solid rgba(255, 255, 255, .5);
  padding: 13px 26px;
  font-size: 14px;
  font-weight: 500;
  border-radius: var(--radius);
  transition: var(--transition);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}
.btn-hero-outline:hover {
  border-color: var(--white);
  background: rgba(255, 255, 255, .1);
}

/* Bottom highlights — icon row */
.hero-highlights {
  display: flex;
  gap: 28px;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.hero-hl {
  display: flex;
  align-items: center;
  gap: 10px;
}
.hero-hl-icon {
  width: 38px; height: 38px;
  border-radius: 50%;
  border: 1.5px solid rgba(255, 255, 255, .25);
  background: rgba(255, 255, 255, .1);
  display: grid;
  place-items: center;
  font-size: 16px;
  flex-shrink: 0;
  backdrop-filter: blur(4px);
}
.hero-hl-text strong {
  font-size: 13px;
  font-weight: 700;
  color: var(--white);
  display: block;
  line-height: 1.2;
  text-align: left;
}
.hero-hl-text span {
  font-size: 11px;
  color: rgba(255, 255, 255, .7);
  text-align: left;
}

/* Hide the image wrapper completely */
.hero-image-wrap {
  display: none !important;
}

/* Responsive */
@media (max-width: 860px) {
  .hero > .container {
    padding-left: 24px;
  }
  .hero-inner {
    grid-template-columns: 1fr;
  }
  .hero-content { max-width: 100%; }
  .hero-sub { max-width: 100%; }

  /* Show right side of image on mobile */
  .hero {
    background-position: right center;
  }

  /* Full dark overlay on mobile */
  .hero::before {
    background: linear-gradient(
      to right,
      rgba(0, 0, 0, 0.85) 0%,
      rgba(0, 0, 0, 0.8) 50%,
      rgba(0, 0, 0, 0.6) 80%,
      rgba(0, 0, 0, 0.4) 100%
    );
  }
}

/* ═══════════════════════════════════════════════════════════════
   ABOUT PREVIEW (Home)
═══════════════════════════════════════════════════════════════ */
.about-preview {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.about-preview-img {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  position: relative;
}
.about-preview-img img { width: 100%; height: 380px; object-fit: cover; }
.about-badge-overlay {
  position: absolute;
  bottom: 20px; left: 20px;
  background: var(--white);
  border-radius: var(--radius);
  padding: 14px 20px;
  box-shadow: var(--shadow-md);
  display: flex; align-items: center; gap: 12px;
}
.about-badge-overlay .num {
  font-family: var(--ff-display);
  font-size: 28px;
  font-weight: 700;
  color: var(--gold);
  line-height: 1;
}
.about-badge-overlay .lbl { font-size: 12px; color: var(--text-soft); }
.about-values-row {
  display: flex;
  gap: 12px;
  margin-top: 24px;
}
.about-val-card {
  flex: 1;
  background: var(--gold-pale);
  border-radius: var(--radius);
  padding: 16px;
  text-align: center;
  border: 1px solid rgba(184,134,11,.18);
}
.about-val-card .icon { font-size: 22px; margin-bottom: 6px; }
.about-val-card strong { font-size: 12px; font-weight: 600; color: var(--green); }

/* ═══════════════════════════════════════════════════════════════
   SERVICES GRID (Home)
═══════════════════════════════════════════════════════════════ */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.service-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 28px;
  border: 1px solid var(--border);
  transition: var(--transition);
  position: relative;
  overflow: hidden;
  cursor: pointer;
}
.service-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--gold), var(--gold-light));
  transform: scaleX(0);
  transition: var(--transition);
}
.service-card:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.service-card:hover::before { transform: scaleX(1); }
.service-card-icon {
  width: 52px; height: 52px;
  background: var(--gold-pale);
  border-radius: 12px;
  display: grid; place-items: center;
  font-size: 24px;
  margin-bottom: 16px;
}
.service-card h3 {
  font-family: var(--ff-display);
  font-size: 17px;
  font-weight: 700;
  margin-bottom: 8px;
}
.service-card h3 .accent { color: var(--gold); }
.service-card p { font-size: 13px; color: var(--text-soft); line-height: 1.6; }
.service-card .read-more {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-size: 12px;
  font-weight: 600;
  color: var(--green);
  margin-top: 14px;
  transition: var(--transition);
}
.service-card:hover .read-more { gap: 8px; }

/* ═══════════════════════════════════════════════════════════════
   MACHINES SECTION
═══════════════════════════════════════════════════════════════ */
.machines-section {
  background: linear-gradient(135deg, var(--green) 0%, var(--green-mid) 100%);
  color: var(--white);
}
.machines-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.machines-inner .section-title { color: var(--white); }
.machines-inner .section-title .accent { color: var(--gold-light); }
.machines-inner .section-sub { color: rgba(255,255,255,.7); }
.machines-list { margin-top: 30px; display: flex; flex-direction: column; gap: 14px; }
.machine-item {
  display: flex;
  align-items: center;
  gap: 14px;
  background: rgba(255,255,255,.1);
  border-radius: var(--radius);
  padding: 14px 18px;
  border: 1px solid rgba(255,255,255,.12);
  transition: var(--transition);
}
.machine-item:hover { background: rgba(255,255,255,.15); }
.machine-item .mi-icon { font-size: 22px; }
.machine-item span { font-weight: 500; font-size: 14px; }
.machines-img {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.machines-img img { width: 100%; height: 400px; object-fit: cover; }

/* ═══════════════════════════════════════════════════════════════
   VERIFY BAR
═══════════════════════════════════════════════════════════════ */
.verify-bar {
  background: var(--gold-pale);
  border-top: 1px solid rgba(184,134,11,.2);
  border-bottom: 1px solid rgba(184,134,11,.2);
  padding: 36px 0;
}
.verify-bar-inner {
  display: flex;
  align-items: center;
  gap: 30px;
  flex-wrap: wrap;
}
.verify-bar-text { flex: 1; }
.verify-bar-text h3 {
  font-family: var(--ff-display);
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 4px;
}
.verify-bar-text p { color: var(--text-soft); font-size: 14px; }
.verify-form {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
}
.verify-form input[type="text"] {
  padding: 13px 18px;
  border: 1.5px solid var(--border);
  border-radius: var(--radius);
  background: var(--white);
  min-width: 240px;
  color: var(--text-dark);
  transition: var(--transition);
}
.verify-form input[type="text"]:focus {
  outline: none;
  border-color: var(--gold);
  box-shadow: 0 0 0 3px rgba(184,134,11,.12);
}

/* ═══════════════════════════════════════════════════════════════
   TESTIMONIALS
═══════════════════════════════════════════════════════════════ */
.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}
@media (max-width:900px) { .testimonials-grid { grid-template-columns: 1fr 1fr; } }
.testimonial-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 24px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}
.testimonial-card:hover { box-shadow: var(--shadow-md); }
.t-stars { color: var(--gold); font-size: 16px; margin-bottom: 10px; }
.t-text { font-size: 13px; color: var(--text-mid); line-height: 1.65; margin-bottom: 16px; }
.t-author { display: flex; align-items: center; gap: 10px; }
.t-avatar {
  width: 36px; height: 36px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--gold), var(--gold-light));
  display: grid; place-items: center;
  color: var(--white);
  font-weight: 700;
  font-size: 14px;
  flex-shrink: 0;
}
.t-name { font-weight: 600; font-size: 13px; }
.t-role { font-size: 11px; color: var(--text-soft); }

/* ═══════════════════════════════════════════════════════════════
   FAQ
═══════════════════════════════════════════════════════════════ */
.faq-list { max-width: 760px; margin: 0 auto; }
.faq-item {
  border: 1px solid var(--border);
  border-radius: var(--radius);
  background: var(--white);
  margin-bottom: 12px;
  overflow: hidden;
}
.faq-q {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 22px;
  cursor: pointer;
  font-weight: 600;
  font-size: 15px;
  gap: 10px;
  transition: var(--transition);
}
.faq-q:hover { background: var(--gold-pale); }
.faq-icon {
  width: 24px; height: 24px;
  background: var(--gold-pale);
  border-radius: 50%;
  display: grid; place-items: center;
  font-size: 16px;
  color: var(--gold);
  font-weight: 700;
  transition: var(--transition);
}
.faq-a {
  padding: 0 22px 18px;
  font-size: 14px;
  color: var(--text-soft);
  line-height: 1.7;
  display: none;
}
.faq-item.open .faq-a { display: block; }
.faq-item.open .faq-icon { transform: rotate(45deg); background: var(--green); color: var(--white); }

/* ═══════════════════════════════════════════════════════════════
   CONTACT BAR (CTA)
═══════════════════════════════════════════════════════════════ */
.cta-bar {
  background: linear-gradient(135deg, var(--green) 0%, var(--green-mid) 100%);
  color: var(--white);
  padding: 60px 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.cta-bar::before {
  content: '';
  position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M0 0h40v40H0V0zm40 40h40v40H40V40zm0-40h2l-2 2V0zm0 4l4-4h2l-6 6V4zm0 4l8-8h2L40 10V8zm0 4L52 0h2L40 14v-2zm0 4L56 0h2L40 18v-2zm0 4L60 0h2L40 22v-2zm0 4L64 0h2L40 26v-2zm0 4L68 0h2L40 30v-2zm0 4L72 0h2L40 34v-2zm0 4L76 0h2L40 38v-2zm0 4L80 0v2L42 40h-2zm4 0L80 4v2L46 40h-2zm4 0L80 8v2L50 40h-2zm4 0L80 12v2L54 40h-2zm4 0L80 16v2L58 40h-2zm4 0L80 20v2L62 40h-2zm4 0L80 24v2L66 40h-2zm4 0L80 28v2L70 40h-2zm4 0L80 32v2L74 40h-2zm4 0L80 36v2L78 40h-2zm4 0L80 40v0zm-56 0z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.cta-bar h2 {
  font-family: var(--ff-display);
  font-size: clamp(24px,4vw,38px);
  font-weight: 700;
  margin-bottom: 10px;
  position: relative;
}
.cta-bar h2 span { color: var(--gold-light); }
.cta-bar p { color: rgba(255,255,255,.75); margin-bottom: 28px; position: relative; }
.cta-bar .btn-gold { position: relative; }

/* ═══════════════════════════════════════════════════════════════
   WHY CHOOSE
═══════════════════════════════════════════════════════════════ */
.why-grid {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}
.why-item {
  flex: 1;
  min-width: 140px;
  max-width: 200px;
  text-align: center;
  padding: 24px 16px;
  background: var(--white);
  border-radius: var(--radius);
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}
.why-item:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.why-item .icon { font-size: 30px; margin-bottom: 10px; }
.why-item strong { font-size: 13px; font-weight: 600; display: block; }

/* ═══════════════════════════════════════════════════════════════
   PAGE HERO (inner pages)
═══════════════════════════════════════════════════════════════ */
.page-hero {
  background: linear-gradient(135deg, #F5EDD3 0%, #EDE0B8 100%);
  padding: 56px 0;
  position: relative;
  overflow: hidden;
}
.page-hero::after {
  content: '';
  position: absolute;
  right: -60px; top: -60px;
  width: 300px; height: 300px;
  border-radius: 50%;
  background: rgba(184,134,11,.08);
}
.page-hero-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}
.page-hero h2 {
  font-family: var(--ff-display);
  font-size: clamp(28px, 4vw, 46px);
  font-weight: 700;
  line-height: 1.15;
  margin-bottom: 12px;
}
.page-hero h2 .accent { color: var(--gold); }
.page-hero p { color: var(--text-soft); max-width: 460px; line-height: 1.7; }
.page-hero-img {
  max-width: 320px;
  flex-shrink: 0;
}
.page-hero-img img {
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  width: 100%;
  height: 220px;
  object-fit: cover;
}

/* ═══════════════════════════════════════════════════════════════
   ABOUT PAGE
═══════════════════════════════════════════════════════════════ */
.commitment-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  margin-bottom: 60px;
}
.commitment-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 28px;
  border: 1px solid var(--border);
}
.commitment-card h3 {
  font-family: var(--ff-display);
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 16px;
}
.commitment-card h3 .accent { color: var(--gold); }
.commitment-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  margin-bottom: 14px;
}
.commitment-item-icon {
  width: 38px; height: 38px;
  background: var(--gold-pale);
  border-radius: 8px;
  display: grid; place-items: center;
  font-size: 18px;
  flex-shrink: 0;
}
.commitment-item h4 { font-size: 14px; font-weight: 600; margin-bottom: 3px; }
.commitment-item p { font-size: 13px; color: var(--text-soft); }
.serve-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.serve-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 28px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
  text-align: center;
}
.serve-card .icon { font-size: 36px; margin-bottom: 14px; }
.serve-card h4 {
  font-family: var(--ff-display);
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 8px;
}
.serve-card p { font-size: 13px; color: var(--text-soft); }
.values-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
}
.value-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 24px 16px;
  text-align: center;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}
.value-card:hover { border-color: var(--gold); box-shadow: var(--shadow-md); }
.value-card .icon { font-size: 28px; margin-bottom: 10px; }
.value-card h4 { font-size: 14px; font-weight: 700; margin-bottom: 6px; color: var(--green); }
.value-card p { font-size: 12px; color: var(--text-soft); line-height: 1.5; }

/* ═══════════════════════════════════════════════════════════════
   SERVICES PAGE
═══════════════════════════════════════════════════════════════ */
.services-detail-list { display: flex; flex-direction: column; gap: 0; }
.service-detail-row {
  display: grid;
  grid-template-columns: 380px 1fr;
  gap: 0;
  align-items: stretch;
  border-bottom: 1px solid var(--border);
  background: var(--white);
  transition: var(--transition);
}
.service-detail-row:first-child { border-radius: var(--radius-lg) var(--radius-lg) 0 0; }
.service-detail-row:last-child {
  border-radius: 0 0 var(--radius-lg) var(--radius-lg);
  border-bottom: none;
}
.service-detail-row:nth-child(even) { background: var(--cream); }
.service-detail-row:hover { box-shadow: var(--shadow-md); z-index: 1; }
.service-detail-img { position: relative; overflow: hidden; }
.service-detail-img img { width: 100%; height: 260px; object-fit: cover; display: block; }
.service-detail-content { padding: 36px 40px; display: flex; flex-direction: column; justify-content: center; }
.service-detail-content h3 {
  font-family: var(--ff-display);
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 8px;
}
.service-detail-content h3 .accent { color: var(--gold); }
.service-detail-content .desc { color: var(--text-soft); font-size: 14px; margin-bottom: 18px; line-height: 1.65; }
.feature-list { display: flex; flex-direction: column; gap: 8px; }
.feature-list li {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  color: var(--text-mid);
}
.feature-list li::before {
  content: '✓';
  width: 20px; height: 20px;
  background: var(--green);
  color: var(--white);
  border-radius: 50%;
  display: grid; place-items: center;
  font-size: 11px;
  font-weight: 700;
  flex-shrink: 0;
}

/* ═══════════════════════════════════════════════════════════════
   GALLERY PAGE
═══════════════════════════════════════════════════════════════ */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
}
.gallery-item {
  border-radius: var(--radius);
  overflow: hidden;
  position: relative;
  cursor: pointer;
  box-shadow: var(--shadow-sm);
}
.gallery-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  transition: transform .4s ease;
}
.gallery-item:hover img { transform: scale(1.06); }
.gallery-caption {
  position: absolute;
  bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(0,0,0,.6));
  color: var(--white);
  font-size: 12px;
  font-weight: 500;
  padding: 24px 14px 12px;
  opacity: 0;
  transition: var(--transition);
}
.gallery-item:hover .gallery-caption { opacity: 1; }

/* ═══════════════════════════════════════════════════════════════
   VERIFY PAGE
═══════════════════════════════════════════════════════════════ */
.verify-steps {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0;
  margin: 40px 0;
  flex-wrap: wrap;
}
.verify-step {
  text-align: center;
  padding: 20px 30px;
  flex: 1;
  min-width: 160px;
}
.step-num {
  width: 52px; height: 52px;
  border-radius: 50%;
  background: var(--gold-pale);
  border: 2px solid var(--gold);
  display: grid; place-items: center;
  margin: 0 auto 12px;
  font-family: var(--ff-display);
  font-size: 20px;
  font-weight: 700;
  color: var(--gold);
}
.verify-step h4 { font-size: 14px; font-weight: 700; margin-bottom: 4px; }
.verify-step p { font-size: 12px; color: var(--text-soft); }
.step-arrow {
  color: var(--border);
  font-size: 24px;
  flex-shrink: 0;
  padding: 0 10px;
  margin-bottom: 20px;
}
.verify-box {
  max-width: 820px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  align-items: start;
}
.verify-form-card, .verify-result-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 36px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
}
.verify-form-card h3 {
  font-family: var(--ff-display);
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 20px;
}
.verify-form-card input[type="text"] {
  width: 100%;
  padding: 13px 16px;
  border: 1.5px solid var(--border);
  border-radius: var(--radius);
  margin-bottom: 14px;
  background: var(--cream);
  color: var(--text-dark);
  transition: var(--transition);
}
.verify-form-card input[type="text"]:focus {
  outline: none;
  border-color: var(--gold);
  background: var(--white);
  box-shadow: 0 0 0 3px rgba(184,134,11,.1);
}
.verify-form-card button { width: 100%; }
.result-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}
.result-header h3 { font-family: var(--ff-display); font-size: 18px; font-weight: 700; }
.verified-badge {
  background: #ECFDF5;
  color: #059669;
  border: 1px solid #A7F3D0;
  border-radius: 100px;
  padding: 5px 14px;
  font-size: 12px;
  font-weight: 600;
}
.error-badge {
  background: #FEF2F2;
  color: #DC2626;
  border: 1px solid #FECACA;
  border-radius: 100px;
  padding: 5px 14px;
  font-size: 12px;
  font-weight: 600;
}
.result-row {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid var(--border);
}
.result-row:last-child { border-bottom: none; }
.result-row .icon { font-size: 18px; width: 24px; }
.result-row .label { font-size: 12px; color: var(--text-soft); min-width: 110px; }
.result-row .value { font-size: 14px; font-weight: 600; color: var(--text-dark); }
.result-row .value.authentic { color: #059669; }
.trust-badges {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 16px;
  margin-top: 40px;
}
.trust-badge-card {
  background: var(--white);
  border-radius: var(--radius);
  padding: 24px 16px;
  text-align: center;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
}
.trust-badge-card .icon { font-size: 28px; margin-bottom: 8px; }
.trust-badge-card h4 { font-size: 14px; font-weight: 700; margin-bottom: 4px; }
.trust-badge-card p { font-size: 12px; color: var(--text-soft); }

/* ═══════════════════════════════════════════════════════════════
   CONTACT PAGE
═══════════════════════════════════════════════════════════════ */
.contact-layout {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: 40px;
  align-items: start;
}
.contact-info-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 36px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
}
.contact-info-card h3 {
  font-family: var(--ff-display);
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 6px;
}
.contact-info-card h3 .accent { color: var(--gold); }
.contact-info-card p { color: var(--text-soft); font-size: 13px; margin-bottom: 24px; }
.contact-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  margin-bottom: 20px;
}
.contact-item-icon {
  width: 42px; height: 42px;
  background: var(--gold-pale);
  border-radius: 10px;
  display: grid; place-items: center;
  font-size: 20px;
  flex-shrink: 0;
}
.contact-item h4 { font-size: 13px; font-weight: 700; margin-bottom: 3px; }
.contact-item p, .contact-item a { font-size: 13px; color: var(--text-soft); }
.contact-item a:hover { color: var(--gold); }
.why-contact {
  margin-top: 24px;
  padding-top: 24px;
  border-top: 1px solid var(--border);
}
.why-contact h4 {
  font-family: var(--ff-display);
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 12px;
}
.why-contact ul { list-style: none; }
.why-contact li {
  font-size: 13px;
  color: var(--text-mid);
  padding: 5px 0;
  display: flex; align-items: center; gap: 8px;
}
.why-contact li::before {
  content: '✓';
  color: var(--green);
  font-weight: 700;
}
.contact-form-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 36px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
}
.contact-form-card h3 {
  font-family: var(--ff-display);
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 6px;
}
.contact-form-card h3 .accent { color: var(--gold); }
.contact-form-card p { color: var(--text-soft); font-size: 13px; margin-bottom: 24px; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.form-group { margin-bottom: 16px; }
.form-group label {
  display: block;
  font-size: 12px;
  font-weight: 600;
  color: var(--text-mid);
  margin-bottom: 6px;
  text-transform: uppercase;
  letter-spacing: .05em;
}
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1.5px solid var(--border);
  border-radius: var(--radius);
  background: var(--cream);
  color: var(--text-dark);
  transition: var(--transition);
  resize: vertical;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--gold);
  background: var(--white);
  box-shadow: 0 0 0 3px rgba(184,134,11,.1);
}
.success-msg {
  background: #ECFDF5;
  border: 1px solid #A7F3D0;
  color: #059669;
  border-radius: var(--radius);
  padding: 16px 20px;
  font-size: 14px;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 20px;
}

/* ═══════════════════════════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════════════════════════ */
.footer {
  background: #0E1E06;
  color: rgba(255,255,255,.75);
  padding: 60px 0 0;
}
.footer-grid {
  display: grid;
  grid-template-columns: 1.4fr 1fr 1fr 1fr;
  gap: 40px;
  padding-bottom: 50px;
  border-bottom: 1px solid rgba(255,255,255,.08);
}
.footer-brand h3 {
  font-family: var(--ff-display);
  font-size: 20px;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 4px;
}
.footer-brand h3 span { color: var(--gold-light); }
.footer-brand .tagline {
  font-size: 12px;
  color: var(--gold-light);
  letter-spacing: .08em;
  margin-bottom: 14px;
}
.footer-brand p {
  font-size: 13px;
  line-height: 1.7;
  color: rgba(255,255,255,.55);
  margin-bottom: 20px;
}
.social-icons { display: flex; gap: 10px; }
.social-icon {
  width: 36px; height: 36px;
  border-radius: 8px;
  background: rgba(255,255,255,.08);
  display: grid; place-items: center;
  font-size: 16px;
  transition: var(--transition);
}
.social-icon:hover {
  background: var(--gold);
  color: var(--white);
}
.footer-col h4 {
  font-size: 13px;
  font-weight: 700;
  color: var(--white);
  letter-spacing: .06em;
  text-transform: uppercase;
  margin-bottom: 18px;
}
.footer-col ul { list-style: none; }
.footer-col ul li { margin-bottom: 10px; }
.footer-col ul li a {
  font-size: 13px;
  color: rgba(255,255,255,.55);
  transition: var(--transition);
}
.footer-col ul li a:hover {
  color: var(--gold-light);
  padding-left: 4px;
}
.footer-bottom {
  padding: 18px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 10px;
}
.footer-bottom p { font-size: 12px; color: rgba(255,255,255,.4); }

/* ═══════════════════════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .services-grid { grid-template-columns: 1fr 1fr; }
  .testimonials-grid { grid-template-columns: 1fr 1fr; }
  .footer-grid { grid-template-columns: 1fr 1fr; }
  .values-grid { grid-template-columns: repeat(3,1fr); }
  .gallery-grid { grid-template-columns: repeat(3,1fr); }
}
@media (max-width: 860px) {
  /* Hero remains single column */
  .hero-highlights { grid-template-columns: 1fr; }
  .about-preview { grid-template-columns: 1fr; }
  .machines-inner { grid-template-columns: 1fr; }
  .machines-img { display: none; }
  .service-detail-row { grid-template-columns: 1fr; }
  .service-detail-img img { height: 200px; }
  .service-detail-content { padding: 24px; }
  .contact-layout { grid-template-columns: 1fr; }
  .commitment-grid { grid-template-columns: 1fr; }
  .serve-grid { grid-template-columns: 1fr; }
  .verify-box { grid-template-columns: 1fr; }
  .values-grid { grid-template-columns: 1fr 1fr; }
  .form-row { grid-template-columns: 1fr; }
  .gallery-grid { grid-template-columns: repeat(2,1fr); }
  .page-hero-inner { flex-direction: column; }
  .page-hero-img { display: none; }
}
@media (max-width: 680px) {
  .nav { display: none; }
  .hamburger {
    display: flex;
    align-items: center;
    gap: 6px;
    background: none;
    border: 1.5px solid var(--border);
    border-radius: 8px;
    padding: 8px 12px;
    font-size: 13px;
    font-weight: 600;
    color: var(--text-dark);
    cursor: pointer;
  }
  .services-grid { grid-template-columns: 1fr; }
  .testimonials-grid { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr; }
  .verify-bar-inner { flex-direction: column; }
  .trust-badges { grid-template-columns: 1fr; }
  .values-grid { grid-template-columns: 1fr 1fr; }
  .topbar { display: none; }
  .gallery-grid { grid-template-columns: repeat(2,1fr); }
}

/* ═══════════════════════════════════════════════════════════════
   ANIMATIONS
═══════════════════════════════════════════════════════════════ */
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}
.fade-up { animation: fadeUp .5s ease forwards; }
.fade-up-2 { animation: fadeUp .5s .15s ease both; }
.fade-up-3 { animation: fadeUp .5s .30s ease both; }
</style>
</head>
<body>

<!-- ══════════════════════════════════════════════
     TOP BAR
══════════════════════════════════════════════ -->
<div class="topbar">
  <div class="container">
    <span class="topbar-loc">📍 18, Heliotola Road, 2nd Floor</span>
    <a href="tel:+8801234567890">📞 +880 1234-567890</a>
    <a href="mailto:info@maagoldlab.com">✉️ info@maagoldlab.com</a>
  </div>
</div>

<!-- ══════════════════════════════════════════════
     HEADER
══════════════════════════════════════════════ -->
<header class="header">
  <div class="container">
    <div class="header-inner">
      <!-- Logo -->
      <a href="?page=home" class="logo">
        <div class="logo-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <div class="logo-text">
          <h1>MAA <span>GOLD</span> LAB</h1>
          <p>Purity You Can Trust</p>
        </div>
      </a>
      <!-- Desktop Nav -->
      <nav class="nav">
        <?php foreach ($nav_links as $link): ?>
          <?php if (!empty($link['dropdown'])): ?>
            <div class="nav-item <?= $page === 'services' ? 'active' : '' ?>">
              <a href="?page=services" class="nav-link">
                <?= $link['label'] ?>
                <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
              </a>
              <div class="dropdown">
                <?php foreach ($service_dropdown as $s): ?>
                  <a href="?page=services"><?= $s ?></a>
                <?php endforeach; ?>
              </div>
            </div>
          <?php else: ?>
            <?php $p = str_replace('?page=', '', $link['href']); ?>
            <div class="nav-item <?= $page === $p ? 'active' : '' ?>">
              <a href="<?= $link['href'] ?>" class="nav-link"><?= $link['label'] ?></a>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
      <!-- Hamburger (mobile) -->
      <button class="hamburger" onclick="toggleMobileMenu()">☰ Menu</button>
    </div>
  </div>
</header>

<!-- Mobile Menu -->
<div id="mobileMenu" style="display:none; background:var(--white); border-bottom:1px solid var(--border); padding:16px 24px;">
  <?php foreach ($nav_links as $link): ?>
    <?php $p = str_replace('?page=', '', $link['href']); ?>
    <a href="<?= $link['href'] ?>" style="display:block; padding:10px 0; font-size:15px; font-weight:500; color:var(--text-dark); border-bottom:1px solid var(--border);"><?= $link['label'] ?></a>
  <?php endforeach; ?>
</div>

<!-- ══════════════════════════════════════════════
     PAGE CONTENT
══════════════════════════════════════════════ -->
<?php if ($page === 'home'): ?>

<!-- ─── HERO — Background Image Style ─────────────────────── -->
<section class="hero">
  <div class="container">
    <div class="hero-inner">

      <!-- Content -->
      <div class="hero-content">

        <div class="hero-label">
          <span></span> Accurate <span></span> Reliable <span></span> Certified
        </div>

        <h2 class="fade-up">
          Trust Begins<br>With <span class="accent">Purity</span>
        </h2>

        <p class="hero-sub fade-up-2">
          Professional gold testing and hallmarking services
          with advanced technology and absolute transparency.
        </p>

        <div class="hero-btns fade-up-3">
          <a href="?page=contact" class="btn-hero-primary">Get Your Gold Tested</a>
          <a href="?page=services" class="btn-hero-outline">Explore Services</a>
        </div>

        <div class="hero-highlights fade-up-3">
          <div class="hero-hl">
            <div class="hero-hl-icon">🎯</div>
            <div class="hero-hl-text">
              <strong>100% Accurate</strong>
              <span>Advanced Technology</span>
            </div>
          </div>
          <div class="hero-hl">
            <div class="hero-hl-icon">📜</div>
            <div class="hero-hl-text">
              <strong>Certified Results</strong>
              <span>Trusted &amp; Reliable</span>
            </div>
          </div>
          <div class="hero-hl">
            <div class="hero-hl-icon">⚡</div>
            <div class="hero-hl-text">
              <strong>Quick Service</strong>
              <span>Fast &amp; Efficient</span>
            </div>
          </div>
          <div class="hero-hl">
            <div class="hero-hl-icon">👨‍🔬</div>
            <div class="hero-hl-text">
              <strong>Expert Team</strong>
              <span>Professional Specialists</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ─── ABOUT PREVIEW ─────────────────────────── -->
<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="about-preview">
      <div class="about-preview-img">
        <!-- Updated Filename -->
        <img src="lab interior.png" alt="MAA GOLD LAB Office" loading="lazy">
        <div class="about-badge-overlay">
          <div>
            <div class="num">5+</div>
            <div class="lbl">Years Experience</div>
          </div>
          <div style="width:1px; height:36px; background:var(--border);"></div>
          <div>
            <div class="num">5K+</div>
            <div class="lbl">Tests Done</div>
          </div>
        </div>
      </div>
      <div class="about-preview-content">
        <span class="section-label">About Us</span>
        <h2 class="section-title">The Standard of Trust &amp; <span class="accent">Transparency</span></h2>
        <div class="divider"></div>
        <p style="color:var(--text-soft); line-height:1.75; margin-bottom:20px;">MAA GOLD LAB is a trusted name in gold testing and hallmarking services. We use advanced technology and follow strict quality standards to deliver accurate results you can rely on.</p>
        <div class="about-values-row">
          <div class="about-val-card">
            <div class="icon">🎯</div>
            <strong>Our Mission</strong>
            <p style="font-size:11px; color:var(--text-soft); margin-top:4px;">Accurate, transparent testing for all.</p>
          </div>
          <div class="about-val-card">
            <div class="icon">👁️</div>
            <strong>Our Vision</strong>
            <p style="font-size:11px; color:var(--text-soft); margin-top:4px;">Most trusted gold lab in the region.</p>
          </div>
          <div class="about-val-card">
            <div class="icon">💎</div>
            <strong>Our Values</strong>
            <p style="font-size:11px; color:var(--text-soft); margin-top:4px;">Honesty, Accuracy, Professionalism.</p>
          </div>
        </div>
        <a href="?page=about" class="btn btn-outline" style="margin-top:24px;">Read More →</a>
      </div>
    </div>
  </div>
</section>

<!-- ─── SERVICES GRID ─────────────────────────── -->
<section class="section" style="background:var(--cream);">
  <div class="container">
    <div class="text-center" style="margin-bottom:40px;">
      <span class="section-label">Our Services</span>
      <h2 class="section-title">Complete Solutions for Your <span class="accent">Gold</span></h2>
      <div class="divider center"></div>
    </div>
    <div class="services-grid">
      <?php foreach ($services as $svc): ?>
        <div class="service-card">
          <div class="service-card-icon"><?= $svc['icon'] ?></div>
          <h3><?= str_replace($svc['title_accent'], '<span class="accent">'.$svc['title_accent'].'</span>', $svc['title']) ?></h3>
          <p><?= $svc['short'] ?></p>
          <a href="?page=services" class="read-more">Learn more →</a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center" style="margin-top:32px;">
      <a href="?page=services" class="btn btn-primary">View All Services &amp; Pricing</a>
    </div>
  </div>
</section>

<!-- ─── MACHINES ──────────────────────────────── -->
<section class="section machines-section">
  <div class="container">
    <div class="machines-inner">
      <div>
        <span class="section-label" style="color:var(--gold-light);">Advanced Machines</span>
        <h2 class="section-title">Technology That Ensures <span class="accent">Accuracy</span></h2>
        <div class="divider"></div>
        <p class="section-sub" style="color:rgba(255,255,255,.65); margin:0 0 8px;">We use to latest and most advanced testing equipment to ensure precise results with minimal time.</p>
        <div class="machines-list">
          <?php foreach ($machines as $m): ?>
            <div class="machine-item">
              <span class="mi-icon"><?= $m['icon'] ?></span>
              <span><?= $m['name'] ?></span>
            </div>
          <?php endforeach; ?>
        </div>
        <a href="?page=gallery" class="btn btn-gold" style="margin-top:24px;">Explore Our Machines</a>
      </div>
      <div class="machines-img">
        <!-- Updated Filename -->
        <img src="machines equipment.png" alt="Lab Equipment" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ─── VERIFY BAR ────────────────────────────── -->
<div class="verify-bar">
  <div class="container">
    <div class="verify-bar-inner">
      <div class="verify-bar-text">
        <h3>🔍 Check Your Report Authenticity</h3>
        <p>Enter your Report ID to verify your gold test report using our secure online verification system.</p>
      </div>
      <form class="verify-form" method="GET" action="?page=verify">
        <input type="hidden" name="page" value="verify">
        <input type="text" name="prefill_id" placeholder="Enter Report ID (e.g. MAA26G0515001)">
        <button type="submit" class="btn btn-primary">🛡️ Verify Now</button>
      </form>
    </div>
  </div>
</div>

<!-- ─── WHY CHOOSE ────────────────────────────── -->
<section class="section-sm" style="background:var(--white);">
  <div class="container">
    <div class="text-center" style="margin-bottom:32px;">
      <span class="section-label">Why Choose MAA Gold Lab?</span>
    </div>
    <div class="why-grid">
      <div class="why-item"><div class="icon">🎯</div><strong>Accurate Results</strong></div>
      <div class="why-item"><div class="icon">📜</div><strong>Certified &amp; Reliable</strong></div>
      <div class="why-item"><div class="icon">⚡</div><strong>Quick Service</strong></div>
      <div class="why-item"><div class="icon">👨‍🔬</div><strong>Expert Team</strong></div>
      <div class="why-item"><div class="icon">🤝</div><strong>Customer First</strong></div>
    </div>
  </div>
</section>

<!-- ─── TESTIMONIALS ──────────────────────────── -->
<section class="section" style="background:var(--cream);">
  <div class="container">
    <div class="text-center" style="margin-bottom:40px;">
      <span class="section-label">Testimonials</span>
      <h2 class="section-title">What Our <span class="accent">Customers</span> Say</h2>
      <div class="divider center"></div>
    </div>
    <div class="testimonials-grid">
      <?php foreach ($testimonials as $t): ?>
        <div class="testimonial-card">
          <div class="t-stars"><?= stars($t['stars']) ?></div>
          <p class="t-text"><?= htmlspecialchars($t['text']) ?></p>
          <div class="t-author">
            <div class="t-avatar"><?= mb_substr($t['name'], 0, 1) ?></div>
            <div><div class="t-name"><?= htmlspecialchars($t['name']) ?></div><div class="t-role"><?= htmlspecialchars($t['role']) ?></div></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ─── FAQ ───────────────────────────────────── -->
<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="text-center" style="margin-bottom:40px;">
      <span class="section-label">FAQ</span>
      <h2 class="section-title">Frequently Asked <span class="accent">Questions</span></h2>
      <div class="divider center"></div>
    </div>
    <div class="faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
        <div class="faq-item" id="faq-<?= $i ?>">
          <div class="faq-q" onclick="toggleFaq(<?= $i ?>)">
            <span><?= htmlspecialchars($faq['q']) ?></span>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-a"><?= htmlspecialchars($faq['a']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ─── CTA BAR ───────────────────────────────── -->
<section class="cta-bar">
  <div class="container">
    <h2>Get accurate gold testing today with <span>trusted results.</span></h2>
    <p>Visit us at 18, Heliotola Road, 2nd Floor — Mon–Sat: 9:00 AM – 8:00 PM</p>
    <a href="?page=contact" class="btn btn-gold">Book Your Test Now →</a>
  </div>
</section>

<!-- ─── HAVE QUESTIONS BAR ────────────────────── -->
<div style="background:var(--cream); border-top:1px solid var(--border); padding:40px 0;">
  <div class="container">
    <div style="display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:24px;">
      <div>
        <h3 style="font-family:var(--ff-display); font-size:20px; font-weight:700; margin-bottom:4px;">Have Questions?</h3>
        <p style="font-size:13px; color:var(--text-soft);">We are here to help you! Visit us or contact us for accurate and reliable guidance.</p>
      </div>
      <div style="display:flex; flex-wrap:wrap; gap:24px;">
        <div style="display:flex; align-items:center; gap:10px;">
          <span style="font-size:20px;">📞</span>
          <div><div style="font-size:11px; color:var(--text-soft);">Phone</div><strong>+880 1234-567890</strong></div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
          <span style="font-size:20px;">✉️</span>
          <div><div style="font-size:11px; color:var(--text-soft);">Email</div><strong>info@maagoldlab.com</strong></div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
          <span style="font-size:20px;">📍</span>
          <div><div style="font-size:11px; color:var(--text-soft);">Location</div><strong>18, Heliotola Road, 2nd Floor</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php elseif ($page === 'about'): ?>

<!-- ─── ABOUT PAGE ────────────────────────────── -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div>
        <span class="section-label">About Us</span>
        <h2>About MAA <span class="accent">Gold Lab</span></h2>
        <p>MAA Gold Lab was established with a mission to bring trust and accuracy into gold testing services. We focus on delivering transparent and reliable results using modern laboratory equipment.</p>
      </div>
      <div class="page-hero-img">
        <!-- Updated Filename -->
        <img src="team.png" alt="MAA Gold Lab Team" loading="lazy">
      </div>
    </div>
  </div>
</div>

<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="commitment-grid">
      <div class="commitment-card">
        <h3>Our <span class="accent">Commitment</span></h3>
        <p style="font-size:13px; color:var(--text-soft); margin-bottom:20px;">Our expert team ensures every test is performed with precision and integrity.</p>
        <?php
          $commitments = [
            ['icon'=>'📋','title'=>'Honest Reporting','desc'=>'We believe in complete transparency and honest evaluation of every gold item.'],
            ['icon'=>'🔬','title'=>'Scientific Accuracy','desc'=>'Advanced technology ensures highly accurate and reliable results every time.'],
            ['icon'=>'🤝','title'=>'Customer Trust','desc'=>'Your trust motivates us to maintain the highest standards in the industry.'],
          ];
        ?>
        <?php foreach ($commitments as $c): ?>
          <div class="commitment-item">
            <div class="commitment-item-icon"><?= $c['icon'] ?></div>
            <div><h4><?= $c['title'] ?></h4><p><?= $c['desc'] ?></p></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div>
        <h3 class="section-title" style="margin-bottom:8px;">Who We <span class="accent">Serve</span></h3>
        <p style="color:var(--text-soft); font-size:13px; margin-bottom:20px;">Whether you are an individual or a jeweller, we ensure dependable results every time.</p>
        <div class="serve-grid">
          <div class="serve-card">
            <div class="icon">👤</div>
            <h4>Individuals</h4>
            <p>For personal jewellery verification, purity checking, and gaining confidence in your gold's value.</p>
          </div>
          <div class="serve-card">
            <div class="icon">🏪</div>
            <h4>Jewellers</h4>
            <p>For bulk testing, hallmarking, and accurate valuation services to support your business.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center" style="margin-bottom:36px;">
      <span class="section-label">Our Core Values</span>
      <h2 class="section-title">Our <span class="accent">Values</span></h2>
      <div class="divider center"></div>
    </div>
    <div class="values-grid">
      <?php foreach ($values as $v): ?>
        <div class="value-card">
          <div class="icon"><?= $v['icon'] ?></div>
          <h4><?= $v['name'] ?></h4>
          <p><?= $v['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Services preview on about -->
<section class="section" style="background:var(--cream);">
  <div class="container">
    <div class="text-center" style="margin-bottom:36px;">
      <span class="section-label">What We Offer</span>
      <h2 class="section-title">Complete <span class="accent">Solutions</span></h2>
      <div class="divider center"></div>
    </div>
    <div class="services-grid">
      <?php foreach ($services as $svc): ?>
        <div class="service-card">
          <div class="service-card-icon"><?= $svc['icon'] ?></div>
          <h3><?= str_replace($svc['title_accent'], '<span class="accent">'.$svc['title_accent'].'</span>', $svc['title']) ?></h3>
          <p><?= $svc['short'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:30px; display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">Accurate Results</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">·</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">Fast Turnaround</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">·</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">Certified Reports</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">·</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">Expert Team</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">·</span>
      <span style="font-size:13px; color:var(--text-soft); padding:10px 0;">Customer Satisfaction</span>
    </div>
  </div>
</section>

<?php elseif ($page === 'services'): ?>

<!-- ─── SERVICES PAGE ─────────────────────────── -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div>
        <span class="section-label">Our Services</span>
        <h2>Our Professional Testing <span class="accent">Services</span></h2>
        <p>MAA Gold Lab provides accurate and certified testing services to ensure purity and transparency in every transaction.</p>
      </div>
      <div class="page-hero-img">
        <!-- Updated Filename -->
        <img src="gold testing.png" alt="XRF Machine" loading="lazy">
      </div>
    </div>
  </div>
</div>

<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="services-detail-list" style="border:1px solid var(--border); border-radius:var(--radius-lg); overflow:hidden; box-shadow:var(--shadow-md);">
      <?php foreach ($services as $i => $svc): ?>
        <div class="service-detail-row" style="<?= $i%2===0 ? '' : 'flex-direction:row-reverse;' ?>">
          <?php if ($i%2!==0): ?>
            <div class="service-detail-content">
              <h3><?= str_replace($svc['title_accent'], '<span class="accent">'.$svc['title_accent'].'</span>', $svc['title']) ?></h3>
              <p class="desc"><?= $svc['description'] ?></p>
              <ul class="feature-list">
                <?php foreach ($svc['features'] as $f): ?>
                  <li><?= htmlspecialchars($f) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="service-detail-img">
              <!-- Updated Filename -->
              <img src="<?= $svc['image'] ?>" alt="<?= htmlspecialchars($svc['image_alt']) ?>" loading="lazy">
            </div>
          <?php else: ?>
            <div class="service-detail-img">
              <!-- Updated Filename -->
              <img src="<?= $svc['image'] ?>" alt="<?= htmlspecialchars($svc['image_alt']) ?>" loading="lazy">
            </div>
            <div class="service-detail-content">
              <h3><?= str_replace($svc['title_accent'], '<span class="accent">'.$svc['title_accent'].'</span>', $svc['title']) ?></h3>
              <p class="desc"><?= $svc['description'] ?></p>
              <ul class="feature-list">
                <?php foreach ($svc['features'] as $f): ?>
                  <li><?= htmlspecialchars($f) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-bar">
  <div class="container">
    <h2>Ready to test your <span>gold?</span></h2>
    <p>Book an appointment or walk in — Mon–Sat: 9:00 AM – 8:00 PM</p>
    <a href="?page=contact" class="btn btn-gold">Contact Us Now →</a>
  </div>
</section>

<?php elseif ($page === 'gallery'): ?>

<!-- ─── GALLERY PAGE ──────────────────────────── -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div>
        <span class="section-label">Gallery</span>
        <h2>Our Lab &amp; <span class="accent">Equipment</span></h2>
        <p>Take a look inside our state-of-the-art laboratory, equipment, and the services we provide every day.</p>
      </div>
    </div>
  </div>
</div>

<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="gallery-grid">
      <!-- Updated Filenames -->
      <?php foreach ($gallery_images as $img): ?>
        <div class="gallery-item">
          <img src="<?= $img['src'] ?>" alt="<?= htmlspecialchars($img['alt']) ?>" loading="lazy">
          <div class="gallery-caption"><?= htmlspecialchars($img['caption']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php elseif ($page === 'verify'): ?>

<!-- ─── VERIFY PAGE ───────────────────────────── -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div>
        <span class="section-label">Verify Report</span>
        <h2>Verify Your <span class="accent">Gold</span> Test Report</h2>
        <p>All MAA Gold Lab reports include a unique ID to instantly verify authenticity and details. Try: <strong>MAA26G0515001</strong></p>
      </div>
      <div class="page-hero-img">
        <!-- Updated Filename -->
        <img src="report verification.png" alt="XRF Machine" loading="lazy">
      </div>
    </div>
  </div>
</div>

<section class="section" style="background:var(--white);">
  <div class="container">
    <!-- Steps -->
    <div class="verify-steps">
      <div class="verify-step">
        <div class="step-num">1</div>
        <h4>Enter Report ID</h4>
        <p>Type in your unique report ID from the certificate.</p>
      </div>
      <span class="step-arrow">→</span>
      <div class="verify-step">
        <div class="step-num">2</div>
        <h4>Click Verify</h4>
        <p>Hit the Verify Now button to check the database.</p>
      </div>
      <span class="step-arrow">→</span>
      <div class="verify-step">
        <div class="step-num">3</div>
        <h4>View Result Instantly</h4>
        <p>See the full test details and authentication status.</p>
      </div>
    </div>

    <div class="verify-box">
      <!-- Form -->
      <div class="verify-form-card">
        <h3>Enter Report ID</h3>
        <form method="POST" action="?page=verify">
          <input type="text" name="report_id" placeholder="e.g. MAA26G0515001" value="<?= htmlspecialchars($_POST['report_id'] ?? $_GET['prefill_id'] ?? '') ?>" required>
          <button type="submit" class="btn btn-primary" style="width:100%;">🛡️ Verify Now</button>
        </form>
        <div style="margin-top:20px; padding:14px; background:var(--gold-pale); border-radius:var(--radius); border:1px solid rgba(184,134,11,.2);">
          <p style="font-size:12px; color:var(--text-mid);">🔒 <strong>Security Note:</strong> Reports are secure, authentic, and cannot be modified.</p>
        </div>
      </div>

      <!-- Result -->
      <div class="verify-result-card">
        <?php if ($verify_result): ?>
          <div class="result-header">
            <h3>Report Result</h3>
            <span class="verified-badge">✓ Verified</span>
          </div>
          <?php
            $result_rows = [
              ['👤', 'Customer Name',       $verify_result['customer'],   false],
              ['🔬', 'Test Type',           $verify_result['test_type'],  false],
              ['💎', 'Purity',              $verify_result['purity'],     false],
              ['📅', 'Date of Test',        $verify_result['date'],       false],
              ['🆔', 'Report ID',           $verify_result['report_id'],  false],
              ['✅', 'Verification Status', $verify_result['status'],     true],
            ];
          ?>
          <?php foreach ($result_rows as $r): ?>
            <div class="result-row">
              <span class="icon"><?= $r[0] ?></span>
              <span class="label"><?= $r[1] ?></span>
              <span class="value <?= $r[3] ? 'authentic' : '' ?>"><?= htmlspecialchars($r[2]) ?></span>
            </div>
          <?php endforeach; ?>
        <?php elseif ($verify_error): ?>
          <div class="result-header">
            <h3>Report Result</h3>
            <span class="error-badge">✗ Not Found</span>
          </div>
          <p style="color:var(--text-soft); font-size:14px; margin-top:10px;"><?= $verify_error ?></p>
        <?php else: ?>
          <div style="text-align:center; padding:40px 20px; color:var(--text-soft);">
            <div style="font-size:48px; margin-bottom:12px;">🔍</div>
            <h3 style="font-family:var(--ff-display); font-size:18px; margin-bottom:6px;">No Report Searched Yet</h3>
            <p style="font-size:13px;">Enter a Report ID on the left to see results here.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Trust badges -->
    <div class="trust-badges">
      <div class="trust-badge-card">
        <div class="icon">🔒</div>
        <h4>100% Secure</h4>
        <p>Your data and reports are fully protected.</p>
      </div>
      <div class="trust-badge-card">
        <div class="icon">🛡️</div>
        <h4>Tamper-Proof</h4>
        <p>Reports cannot be altered or duplicated.</p>
      </div>
      <div class="trust-badge-card">
        <div class="icon">⭐</div>
        <h4>Trusted Results</h4>
        <p>Accepted for resale and exchange anywhere.</p>
      </div>
    </div>
  </div>
</section>

<?php elseif ($page === 'contact'): ?>

<!-- ─── CONTACT PAGE ──────────────────────────── -->
<div class="page-hero">
  <div class="container">
    <div class="page-hero-inner">
      <div>
        <span class="section-label">Contact Us</span>
        <h2>Contact MAA <span class="accent">Gold Lab</span></h2>
        <p>Need gold testing or have questions? We are here to help you with fast and reliable support.</p>
      </div>
      <div class="page-hero-img">
        <!-- Updated Filename -->
        <img src="contact.png" alt="MAA Gold Lab Reception" loading="lazy">
      </div>
    </div>
  </div>
</div>

<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="contact-layout">
      <!-- Info -->
      <div class="contact-info-card">
        <h3>Get In <span class="accent">Touch</span></h3>
        <p>Reach out through any of the channels below.</p>
        <div class="contact-item">
          <div class="contact-item-icon">📞</div>
          <div><h4>Phone</h4><a href="tel:+8801234567890">+880 1234-567890</a></div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">✉️</div>
          <div><h4>Email</h4><a href="mailto:info@maagoldlab.com">info@maagoldlab.com</a></div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">📍</div>
          <div><h4>Location</h4><p>18, Heliotola Road, 2nd Floor<br>Walk-in Service Available</p></div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">🕐</div>
          <div><h4>Working Hours</h4><p>Mon – Sat: 9:00 AM – 8:00 PM<br>Sunday: Limited Support</p></div>
        </div>
        <div class="why-contact">
          <h4>Why Contact Us?</h4>
          <ul>
            <li>Accurate and reliable gold testing</li>
            <li>Fast report delivery</li>
            <li>Transparent pricing</li>
            <li>Expert customer support</li>
          </ul>
        </div>
      </div>
      <!-- Form -->
      <div class="contact-form-card">
        <h3>Send Us a <span class="accent">Message</span></h3>
        <p>Fill in your details and we'll get back to you shortly.</p>
        <?php if ($contact_success): ?>
          <div class="success-msg">✅ Thank you! Your message has been sent. We'll contact you soon.</div>
        <?php endif; ?>
        <form method="POST" action="?page=contact">
          <div class="form-row">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="full_name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" name="phone" placeholder="+880 XXXX-XXXXXX">
            </div>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="you@example.com">
          </div>
          <div class="form-group">
            <label>Service Required</label>
            <select name="service">
              <option value="">Select a service</option>
              <?php foreach ($service_dropdown as $s): ?>
                <option value="<?= htmlspecialchars($s) ?>"><?= htmlspecialchars($s) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea name="message" rows="4" placeholder="How can we help you?"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;">✉️ Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>

<!-- ══════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════ -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand -->
      <div class="footer-brand">
        <h3>MAA <span>GOLD</span> LAB</h3>
        <div class="tagline">Purity You Can Trust</div>
        <p>Trusted Gold &amp; Metal Testing Services. We are committed to providing accurate gold testing and hallmarking services with integrity and transparency.</p>
        <div class="social-icons">
          <a href="#" class="social-icon" title="Facebook">𝑓</a>
          <a href="#" class="social-icon" title="Instagram">📷</a>
          <a href="#" class="social-icon" title="WhatsApp">💬</a>
        </div>
      </div>
      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <?php foreach ($nav_links as $link): ?>
            <li><a href="<?= $link['href'] ?>"><?= $link['label'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- Services -->
      <div class="footer-col">
        <h4>Our Services</h4>
        <ul>
          <?php foreach ($services as $svc): ?>
            <li><a href="?page=services"><?= $svc['title'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- Important -->
      <div class="footer-col">
        <h4>Important</h4>
        <ul>
          <li><a href="?page=verify">Verify Report</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
        </ul>
        <h4 style="margin-top:20px;">Contact Us</h4>
        <ul>
          <li><a href="tel:+8801234567890">📞 +880 1234-567890</a></li>
          <li><a href="mailto:info@maagoldlab.com">✉️ info@maagoldlab.com</a></li>
          <li><a href="#">📍 18, Heliotola Road, 2nd Floor</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 MAA GOLD LAB. All Rights Reserved.</p>
      <p>Purity You Can Trust ❤️</p>
    </div>
  </div>
</footer>

<!-- ══════════════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════════════ -->
<script>
// Mobile menu toggle
function toggleMobileMenu() {
  var m = document.getElementById('mobileMenu');
  m.style.display = m.style.display === 'none' ? 'block' : 'none';
}

// FAQ accordion
function toggleFaq(idx) {
  var item = document.getElementById('faq-' + idx);
  if (!item) return;
  var wasOpen = item.classList.contains('open');
  // Close all
  document.querySelectorAll('.faq-item').forEach(function(el) { el.classList.remove('open'); });
  // Toggle clicked
  if (!wasOpen) item.classList.add('open');
}

// Smooth scroll reveal on scroll
(function() {
  var els = document.querySelectorAll('.service-card, .testimonial-card, .value-card, .gallery-item');
  if (!('IntersectionObserver' in window)) return;
  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  els.forEach(function(el) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity .4s ease, transform .4s ease';
    obs.observe(el);
  });
})();
</script>
</body>
</html>