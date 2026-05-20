<?php
/**
 * CUMILLA GOLD TESTING CENTER — Single File Website
 * All pages handled via $_GET['page']
 */

$page = $_GET['page'] ?? 'home';
$validPages = ['home','about','service','contact'];
if (!in_array($page, $validPages)) $page = 'home';

// Handle contact form
$formMsg = '';
if ($page === 'contact' && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
  $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
  $message = htmlspecialchars(trim($_POST['message'] ?? ''));
  $formMsg = ($name && $phone && $message) ? 'success' : 'error';
}

$titles = [
  'home'    => 'CUMILLA GOLD TESTING CENTER — কুমিল্লার বিশ্বস্ত স্বর্ণ পরীক্ষা কেন্দ্র',
  'about'   => 'আমাদের সম্পর্কে — CUMILLA GOLD TESTING CENTER',
  'service' => 'সেবাসমূহ — XRF টেস্টিং, হলমার্কিং, গহনা তৈরি | CUMILLA GOLD TESTING CENTER',
  'contact' => 'যোগাযোগ — CUMILLA GOLD TESTING CENTER',
];
?>
<!DOCTYPE html>
<html lang="bn" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titles[$page] ?></title>
  <meta name="description" content="কুমিল্লার সবচেয়ে নির্ভরযোগ্য স্বর্ণ পরীক্ষা কেন্দ্র। XRF টেস্টিং, হলমার্কিং, গহনা তৈরি ও মেটাল অ্যানালাইসিস।">
  <meta name="robots" content="index, follow">
  <meta name="google" content="notranslate">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Josefin+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ═══════════════════════════════════════════════
   CSS VARIABLES & RESET  — Light Blue Palette
═══════════════════════════════════════════════ */
:root {
  --black:      #F0F6FF;   /* page bg — very light blue */
  --deep:       #E4EEF9;   /* section alt bg */
  --card-bg:    #FFFFFF;   /* card background */
  --border:     #C2D8F0;   /* borders */
  --gold:       #1A6DBF;   /* primary blue (was gold) */
  --gold-light: #2E8AE8;   /* brighter blue */
  --gold-pale:  #EAF2FF;   /* pale blue tint */
  --cream:      #F5F9FF;
  --text:       #1E3A5F;   /* main text — dark navy */
  --text-muted: #5A7FA8;   /* muted blue-gray */
  --white:      #FFFFFF;   /* true white for cards/hero text */
  --navy:       #0A1929;   /* deep navy for footer */
  --red:        #C0392B;
  --green:      #27AE60;
  --radius:     4px;
  --radius-lg:  12px;
  --shadow:     0 8px 40px rgba(26,109,191,0.10);
  --glow:       0 0 30px rgba(26,109,191,0.15);
  --transition: 0.3s cubic-bezier(0.4,0,0.2,1);
}

*,*::before,*::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: 'Hind Siliguri', sans-serif;
  background: var(--black);
  color: var(--text);
  line-height: 1.7;
  overflow-x: hidden;
}
img { max-width: 100%; display: block; }
a { text-decoration: none; color: inherit; }
ul { list-style: none; }
button { cursor: pointer; border: none; background: none; font-family: inherit; }

/* SCROLLBAR */
::-webkit-scrollbar { width: 4px; }
::-webkit-scrollbar-track { background: var(--deep); }
::-webkit-scrollbar-thumb { background: var(--gold); border-radius: 2px; }

/* ═══════════════════════════════════════════════
   TYPOGRAPHY
═══════════════════════════════════════════════ */
h1,h2,h3,h4 {
  font-family: 'Playfair Display', serif;
  color: var(--navy);
  line-height: 1.2;
}
.label-tag {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.72rem;
  font-weight: 600;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: var(--gold);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 16px;
}
.label-tag::before {
  content: '';
  display: inline-block;
  width: 24px;
  height: 1px;
  background: var(--gold);
}

/* ═══════════════════════════════════════════════
   LAYOUT
═══════════════════════════════════════════════ */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}
.section-padding { padding: 100px 0; }
.section-header { margin-bottom: 60px; }
.section-header h2 {
  font-size: clamp(2rem, 4vw, 3rem);
  margin-bottom: 16px;
}
.section-header p {
  color: var(--text-muted);
  font-size: 1.05rem;
  max-width: 540px;
}

/* ═══════════════════════════════════════════════
   DECORATIVE ELEMENTS
═══════════════════════════════════════════════ */
.gold-line {
  display: inline-block;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, var(--gold), transparent);
  margin-bottom: 24px;
}
.gold-dot {
  display: inline-block;
  width: 6px;
  height: 6px;
  background: var(--gold);
  border-radius: 50%;
  margin: 0 8px;
}

/* ═══════════════════════════════════════════════
   BUTTONS
═══════════════════════════════════════════════ */
.btn-gold {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: linear-gradient(135deg, var(--gold), #1255A0);
  color: #FFFFFF;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 16px 36px;
  border-radius: var(--radius);
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}
.btn-gold::after {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(255,255,255,0.12);
  opacity: 0;
  transition: var(--transition);
}
.btn-gold:hover::after { opacity: 1; }
.btn-gold:hover { transform: translateY(-2px); box-shadow: 0 12px 40px rgba(26,109,191,0.35); }

.btn-outline {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: 1.5px solid var(--gold);
  color: var(--gold);
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 15px 34px;
  border-radius: var(--radius);
  transition: var(--transition);
  background: transparent;
}
.btn-outline:hover {
  background: rgba(26,109,191,0.08);
  transform: translateY(-2px);
}

/* ═══════════════════════════════════════════════
   INTRO OVERLAY
═══════════════════════════════════════════════ */
#intro-overlay {
  position: fixed; inset: 0; z-index: 99999;
  background: #0A1929;
  display: flex; align-items: center; justify-content: center;
  transition: opacity 0.8s ease, visibility 0.8s ease;
}
#intro-overlay.hidden { opacity: 0; visibility: hidden; pointer-events: none; }

.intro-inner { text-align: center; display: flex; flex-direction: column; align-items: center; gap: 20px; }

.intro-emblem {
  width: 90px; height: 90px;
  border: 2px solid #2E8AE8;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 2px;
  color: #2E8AE8;
  opacity: 0;
  transform: scale(0.5);
  animation: emblem-pop 0.6s cubic-bezier(0.34,1.56,0.64,1) 0.3s forwards;
}
.intro-name {
  font-family: 'Playfair Display', serif;
  font-size: clamp(1.8rem, 5vw, 3rem);
  color: #FFFFFF;
  opacity: 0;
  transform: translateY(20px);
  animation: fade-up 0.7s ease 0.8s forwards;
}
.intro-sub {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.75rem;
  letter-spacing: 6px;
  text-transform: uppercase;
  color: #2E8AE8;
  opacity: 0;
  animation: fade-in 0.6s ease 1.3s forwards;
}
.intro-bar {
  width: 0; height: 1px; background: #2E8AE8;
  animation: bar-grow 1.2s ease 1.6s forwards;
}

@keyframes emblem-pop { to { opacity: 1; transform: scale(1); } }
@keyframes fade-up    { to { opacity: 1; transform: translateY(0); } }
@keyframes fade-in    { to { opacity: 1; } }
@keyframes bar-grow   { to { width: 200px; } }

/* ═══════════════════════════════════════════════
   HEADER
═══════════════════════════════════════════════ */
.site-header {
  position: fixed; top: 0; left: 0; right: 0;
  z-index: 1000;
  background: rgba(255,255,255,0.95);
  border-bottom: 1px solid var(--border);
  backdrop-filter: blur(20px);
  padding: 0;
  transition: var(--transition);
}
.site-header.scrolled {
  box-shadow: 0 4px 24px rgba(26,109,191,0.10);
}
.header-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 80px;
}

.logo {
  display: flex; align-items: center; gap: 14px;
  text-decoration: none;
}
.logo-mark {
  width: 44px; height: 44px;
  border: 1.5px solid var(--gold);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 1px;
  color: var(--gold);
  flex-shrink: 0;
  background: var(--gold-pale);
}
.logo-name {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--navy);
  line-height: 1.3;
}
.logo-name small {
  display: block;
  font-size: 0.6rem;
  letter-spacing: 3px;
  color: var(--gold);
  font-weight: 400;
}

.desktop-nav {
  display: flex; gap: 40px;
}
.desktop-nav a {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--text-muted);
  transition: var(--transition);
  position: relative;
}
.desktop-nav a::after {
  content: '';
  position: absolute; bottom: -4px; left: 0; right: 0;
  height: 2px;
  background: var(--gold);
  transform: scaleX(0);
  transition: var(--transition);
}
.desktop-nav a:hover, .desktop-nav a.active {
  color: var(--navy);
}
.desktop-nav a:hover::after, .desktop-nav a.active::after {
  transform: scaleX(1);
}

.header-actions {
  display: flex; gap: 12px; align-items: center;
}
.header-actions a {
  width: 38px; height: 38px;
  border: 1px solid var(--border);
  border-radius: var(--radius);
  display: flex; align-items: center; justify-content: center;
  color: var(--text-muted);
  font-size: 0.9rem;
  transition: var(--transition);
  background: var(--white);
}
.header-actions a:hover {
  border-color: var(--gold);
  color: var(--gold);
  background: var(--gold-pale);
}

.hamburger {
  display: none;
  flex-direction: column; gap: 5px;
  width: 36px; padding: 6px;
}
.hamburger span {
  display: block; height: 1.5px; background: var(--navy);
  transition: var(--transition);
}
.hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(4.5px, 4.5px); }
.hamburger.open span:nth-child(2) { opacity: 0; }
.hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(4.5px, -4.5px); }

/* MOBILE NAV */
.mobile-nav {
  position: fixed; top: 80px; left: 0; right: 0;
  background: rgba(255,255,255,0.98);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
  padding: 0;
  max-height: 0; overflow: hidden;
  transition: max-height 0.4s ease, padding 0.4s ease;
  z-index: 999;
}
.mobile-nav.show {
  max-height: 400px;
  padding: 20px 0;
}
.mobile-nav a {
  display: block;
  padding: 14px 24px;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.8rem;
  font-weight: 600;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--text-muted);
  border-bottom: 1px solid var(--border);
  transition: var(--transition);
}
.mobile-nav a:hover, .mobile-nav a.active {
  color: var(--gold);
  padding-left: 32px;
  background: var(--gold-pale);
}
.mobile-nav-footer {
  padding: 20px 24px;
  display: flex; gap: 12px;
}
.mobile-nav-footer a {
  flex: 1; text-align: center; border: none;
  padding: 12px;
  border-radius: var(--radius);
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.75rem;
  letter-spacing: 1px;
  font-weight: 600;
  text-transform: uppercase;
}
.mob-wp  { background: #25D366 !important; color: #FFFFFF !important; }
.mob-tel { background: var(--gold) !important; color: #FFFFFF !important; }

/* ═══════════════════════════════════════════════
   IMAGE SLIDER  — 1366×768 banners, full width
═══════════════════════════════════════════════ */
.img-slider-wrapper {
  width: 100%;
  margin-top: 80px; /* offset for fixed header */
  position: relative;
  overflow: hidden;
  background: var(--navy);
  line-height: 0; /* removes inline-block gap under img */
}

.img-slider-track {
  display: flex;
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: transform;
}

.img-slider-track img {
  width: 100%;
  flex-shrink: 0;
  height: auto;        /* preserves 1366×768 ratio */
  display: block;
  object-fit: contain; /* shows full image, no crop */
  pointer-events: none;
  user-select: none;
}


/* Dot indicators */
.img-slider-dots {
  position: absolute;
  bottom: 14px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 8px;
  z-index: 10;
}
.img-slider-dots button {
  width: 28px;
  height: 3px;
  border-radius: 2px;
  background: rgba(255,255,255,0.35);
  transition: background var(--transition), width var(--transition);
  cursor: pointer;
}
.img-slider-dots button.active {
  background: #fff;
  width: 44px;
}

.slide-content {
  position: relative; z-index: 2;
  max-width: 680px;
  padding: 0 24px;
}
.slide-content .label-tag { color: #7EC8FF; opacity: 0; transform: translateY(10px); transition: opacity 0.5s ease 0.2s, transform 0.5s ease 0.2s; }
.slide-content .label-tag::before { background: #7EC8FF; }
.slide-content h1 { font-size: clamp(2.2rem, 5vw, 4rem); color: #FFFFFF; margin-bottom: 20px; opacity: 0; transform: translateY(20px); transition: opacity 0.6s ease 0.4s, transform 0.6s ease 0.4s; }
.slide-content h1 span { color: #7EC8FF; }
.slide-content p { font-size: 1.1rem; color: rgba(255,255,255,0.75); margin-bottom: 32px; opacity: 0; transform: translateY(20px); transition: opacity 0.6s ease 0.6s, transform 0.6s ease 0.6s; }
.slide-badges { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 36px; opacity: 0; transition: opacity 0.5s ease 0.8s; }
.slide-badge {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.7rem; font-weight: 600; letter-spacing: 2px;
  text-transform: uppercase;
  padding: 8px 16px;
  border: 1px solid rgba(126,200,255,0.5);
  border-radius: var(--radius);
  color: #EAF5FF;
  background: rgba(255,255,255,0.07);
  display: flex; align-items: center; gap: 8px;
}
.slide-badge i { color: #7EC8FF; }
.slide-btn-wrap { opacity: 0; transform: translateY(10px); transition: opacity 0.5s ease 1s, transform 0.5s ease 1s; }

.slide.active .slide-content .label-tag,
.slide.active .slide-content h1,
.slide.active .slide-content p,
.slide.active .slide-badges,
.slide.active .slide-btn-wrap {
  opacity: 1; transform: translateY(0);
}

/* HERO RIGHT PANEL */
.hero-stats {
  position: absolute; right: 60px; top: 50%; transform: translateY(-50%);
  z-index: 3;
  display: flex; flex-direction: column; gap: 20px;
}
.hero-stat {
  background: rgba(255,255,255,0.12);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,0.2);
  border-left: 3px solid #7EC8FF;
  padding: 20px 28px;
  min-width: 180px;
}
.hero-stat-num {
  font-family: 'Playfair Display', serif;
  font-size: 2.2rem;
  color: #7EC8FF;
  line-height: 1;
}
.hero-stat-label {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.65rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: rgba(255,255,255,0.65);
  margin-top: 6px;
}

/* SLIDER CONTROLS */
.slider-dots {
  position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%);
  z-index: 4; display: flex; gap: 8px;
}
.slider-dots button {
  width: 24px; height: 3px;
  background: rgba(255,255,255,0.35);
  border-radius: 2px;
  transition: var(--transition);
}
.slider-dots button.active { background: #7EC8FF; width: 40px; }

/* SCROLLING TICKER */
.ticker-bar {
  position: relative; z-index: 5;
  background: var(--gold);
  padding: 10px 0;
  overflow: hidden;
}
.ticker-track {
  display: flex; gap: 0;
  animation: ticker-scroll 25s linear infinite;
  white-space: nowrap;
}
.ticker-item {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #FFFFFF;
  padding: 0 32px;
  flex-shrink: 0;
  display: flex; align-items: center; gap: 12px;
}
.ticker-item::after { content: '◆'; font-size: 0.5rem; color: rgba(255,255,255,0.5); }
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

/* ═══════════════════════════════════════════════
   SERVICES SHOWCASE
═══════════════════════════════════════════════ */
.services-section { background: var(--deep); }

.services-main-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2px;
  background: var(--border);
}
.service-block {
  background: var(--card-bg);
  padding: 48px;
  position: relative;
  overflow: hidden;
  transition: var(--transition);
  cursor: pointer;
}
.service-block::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--gold), var(--gold-light), transparent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s ease;
}
.service-block:hover::before { transform: scaleX(1); }
.service-block:hover { background: var(--gold-pale); }

.service-block-number {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 5rem;
  font-weight: 700;
  color: rgba(26,109,191,0.05);
  position: absolute;
  top: 20px; right: 30px;
  line-height: 1;
  transition: var(--transition);
}
.service-block:hover .service-block-number { color: rgba(26,109,191,0.10); }

.service-block-icon {
  width: 52px; height: 52px;
  border: 1px solid var(--border);
  border-radius: var(--radius);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.3rem;
  color: var(--gold);
  margin-bottom: 24px;
  transition: var(--transition);
  background: var(--gold-pale);
}
.service-block:hover .service-block-icon {
  border-color: var(--gold);
  background: rgba(26,109,191,0.12);
}
.service-block h3 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 1rem;
  color: var(--navy);
  margin-bottom: 12px;
}
.service-block p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.7; }

.service-block.featured {
  grid-column: span 2;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
  background: linear-gradient(135deg, rgba(26,109,191,0.05) 0%, var(--card-bg) 60%);
  border-bottom: 1px solid var(--border);
}
.service-block.featured::before { background: linear-gradient(90deg, var(--gold), var(--gold-light), transparent); }
.service-block.featured h3 {
  font-family: 'Playfair Display', serif;
  font-size: 2rem;
  letter-spacing: 0;
  text-transform: none;
  margin-bottom: 16px;
  color: var(--navy);
}
.service-block.featured p { font-size: 1rem; }
.service-block-img {
  height: 240px;
  background: var(--border);
  border-radius: var(--radius);
  overflow: hidden;
  position: relative;
}
.service-block-img img { width: 100%; height: 100%; object-fit: cover; }
.service-block-img .img-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(26,109,191,0.15), transparent);
}

/* ═══════════════════════════════════════════════
   ABOUT / STORY
═══════════════════════════════════════════════ */
.about-section { background: var(--black); }
.about-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}
.about-visual {
  position: relative;
}
.about-visual-frame {
  position: relative;
  border: 1px solid var(--border);
  padding: 16px;
  background: var(--white);
}
.about-visual-frame::before {
  content: '';
  position: absolute; top: -12px; left: -12px;
  right: 12px; bottom: -12px;
  border: 1px solid rgba(26,109,191,0.25);
  pointer-events: none;
}
.about-visual-frame img {
  width: 100%;
  aspect-ratio: 4/3;
  object-fit: cover;
  filter: sepia(5%) contrast(1.05);
}
.about-badge {
  position: absolute;
  bottom: -24px; right: -24px;
  background: var(--gold);
  color: #FFFFFF;
  padding: 20px 24px;
  text-align: center;
}
.about-badge-num {
  font-family: 'Playfair Display', serif;
  font-size: 2.5rem;
  font-weight: 900;
  line-height: 1;
  display: block;
  color: #FFFFFF;
}
.about-badge-label {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.62rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  display: block;
  margin-top: 4px;
  color: rgba(255,255,255,0.85);
}

.about-content h2 {
  font-size: clamp(1.8rem, 3vw, 2.8rem);
  margin-bottom: 24px;
}
.about-content p {
  color: var(--text-muted);
  margin-bottom: 20px;
  font-size: 1rem;
}
.about-highlight {
  border-left: 3px solid var(--gold);
  padding: 16px 20px;
  margin: 28px 0;
  background: var(--gold-pale);
  font-style: italic;
  color: var(--navy);
  font-size: 0.95rem;
  border-radius: 0 var(--radius) var(--radius) 0;
}
.about-metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: 40px;
  padding-top: 40px;
  border-top: 1px solid var(--border);
}
.metric-item {}
.metric-num {
  font-family: 'Playfair Display', serif;
  font-size: 2.2rem;
  color: var(--gold);
  line-height: 1;
}
.metric-lbl {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.65rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--text-muted);
  margin-top: 6px;
}

/* ═══════════════════════════════════════════════
   WHY CHOOSE US — HORIZONTAL CARDS
═══════════════════════════════════════════════ */
.why-section { background: var(--deep); }
.why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2px;
  background: var(--border);
  margin-top: 60px;
}
.why-card {
  background: var(--card-bg);
  padding: 40px;
  transition: var(--transition);
}
.why-card:hover { background: var(--gold-pale); }
.why-icon {
  font-size: 1.4rem;
  color: var(--gold);
  margin-bottom: 20px;
  display: block;
}
.why-card h3 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.9rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 12px;
  color: var(--navy);
}
.why-card p { color: var(--text-muted); font-size: 0.9rem; line-height: 1.7; }

/* ═══════════════════════════════════════════════
   SERVICE DETAIL PAGE
═══════════════════════════════════════════════ */
.service-detail-section { background: var(--black); }
.service-detail-item {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
  padding: 60px 0;
  border-bottom: 1px solid var(--border);
}
.service-detail-item:last-child { border-bottom: none; }
.service-detail-item.reverse { direction: rtl; }
.service-detail-item.reverse > * { direction: ltr; }
.service-detail-item img {
  width: 100%;
  aspect-ratio: 4/3;
  object-fit: cover;
  border: 1px solid var(--border);
  filter: sepia(5%) contrast(1.05);
  border-radius: var(--radius);
}
.service-detail-item h3 {
  font-size: 1.6rem;
  margin-bottom: 16px;
}
.service-detail-item p {
  color: var(--text-muted);
  margin-bottom: 16px;
  line-height: 1.8;
}

.who-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  margin-top: 60px;
}
.who-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  padding: 32px 24px;
  text-align: center;
  transition: var(--transition);
  border-radius: var(--radius-lg);
}
.who-card:hover {
  border-color: var(--gold);
  transform: translateY(-4px);
  box-shadow: 0 12px 32px rgba(26,109,191,0.10);
}
.who-icon {
  font-size: 2rem;
  margin-bottom: 16px;
  display: block;
}
.who-card h4 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.82rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 10px;
}
.who-card p { color: var(--text-muted); font-size: 0.88rem; }

/* ═══════════════════════════════════════════════
   MACHINE SECTION
═══════════════════════════════════════════════ */
.machine-section {
  background: var(--deep);
  position: relative;
  overflow: hidden;
}
.machine-section::before {
  content: 'XRF';
  position: absolute;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 20rem;
  font-weight: 700;
  color: rgba(26,109,191,0.04);
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
  white-space: nowrap;
}
.machine-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}
.machine-img-wrap {
  position: relative;
}
.machine-img-wrap img {
  width: 100%;
  aspect-ratio: 4/3;
  object-fit: cover;
  border: 1px solid var(--border);
  border-radius: var(--radius);
}
.machine-badge {
  position: absolute;
  top: -20px; right: -20px;
  width: 100px; height: 100px;
  background: var(--gold);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.6rem;
  font-weight: 700;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: #FFFFFF;
  text-align: center;
  line-height: 1.4;
  padding: 16px;
  box-shadow: 0 8px 24px rgba(26,109,191,0.25);
}
.machine-text h2 { font-size: 2.2rem; margin-bottom: 24px; }
.machine-text p { color: var(--text-muted); margin-bottom: 16px; }
.machine-note {
  display: flex; align-items: center; gap: 12px;
  padding: 16px 20px;
  background: var(--gold-pale);
  border-left: 3px solid var(--gold);
  margin-top: 24px;
  color: var(--navy);
  font-size: 0.9rem;
  border-radius: 0 var(--radius) var(--radius) 0;
}
.machine-note i { color: var(--gold); }

/* ═══════════════════════════════════════════════
   FAQ
═══════════════════════════════════════════════ */
.faq-section { background: var(--black); }
.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  border: 1px solid var(--border);
  margin-top: 60px;
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.faq-item {
  border-bottom: 1px solid var(--border);
  border-right: 1px solid var(--border);
  background: var(--card-bg);
}
.faq-item:nth-child(even) { border-right: none; }
.faq-question {
  width: 100%;
  text-align: left;
  padding: 28px 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  font-family: 'Hind Siliguri', sans-serif;
  font-size: 1rem;
  color: var(--text);
  transition: var(--transition);
}
.faq-question:hover { color: var(--gold); background: var(--gold-pale); }
.faq-question i {
  color: var(--gold);
  flex-shrink: 0;
  transition: transform var(--transition);
}
.faq-item.open .faq-question { color: var(--navy); background: var(--gold-pale); }
.faq-item.open .faq-question i { transform: rotate(180deg); }
.faq-answer {
  max-height: 0; overflow: hidden;
  transition: max-height 0.3s ease, padding 0.3s ease;
}
.faq-item.open .faq-answer { max-height: 200px; }
.faq-answer p {
  padding: 0 32px 24px;
  color: var(--text-muted);
  font-size: 0.92rem;
  line-height: 1.7;
}

/* ═══════════════════════════════════════════════
   CONTACT PAGE
═══════════════════════════════════════════════ */
.contact-section { background: var(--black); }
.contact-layout {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: 60px;
  align-items: start;
}

.contact-info-panel {}
.contact-info-panel h2 { font-size: 2rem; margin-bottom: 12px; }
.contact-info-panel > p { color: var(--text-muted); margin-bottom: 40px; }

.contact-action {
  display: flex; align-items: center; gap: 20px;
  padding: 24px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  text-decoration: none;
  transition: var(--transition);
  margin-bottom: 12px;
  border-radius: var(--radius-lg);
}
.contact-action:hover { border-color: var(--gold); background: var(--gold-pale); box-shadow: 0 4px 20px rgba(26,109,191,0.10); }
.contact-action-icon {
  width: 48px; height: 48px;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem;
  border: 1px solid var(--border);
  flex-shrink: 0;
  border-radius: var(--radius);
  background: var(--gold-pale);
}
.contact-action.wp .contact-action-icon { color: #25D366; border-color: #25D366; background: #f0fff4; }
.contact-action.fb .contact-action-icon { color: #1877F2; border-color: #1877F2; background: #eef4ff; }
.contact-action.tel .contact-action-icon { color: var(--gold); border-color: var(--gold); background: var(--gold-pale); }
.contact-action-text strong {
  display: block;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--navy);
  margin-bottom: 4px;
}
.contact-action-text span { color: var(--text-muted); font-size: 0.85rem; }
.contact-action-arrow { margin-left: auto; color: var(--gold); font-size: 0.8rem; }

.contact-info-box {
  margin-top: 24px;
  padding: 24px;
  border: 1px solid var(--border);
  background: var(--card-bg);
  border-radius: var(--radius-lg);
}
.contact-info-box h4 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 16px;
}
.info-list-item {
  display: flex; align-items: flex-start; gap: 12px;
  margin-bottom: 10px;
  color: var(--text-muted);
  font-size: 0.9rem;
}
.info-list-item i { color: var(--gold); margin-top: 3px; font-size: 0.8rem; }

/* FORM */
.contact-form-panel {
  background: var(--card-bg);
  border: 1px solid var(--border);
  padding: 48px;
  border-radius: var(--radius-lg);
  box-shadow: 0 8px 40px rgba(26,109,191,0.07);
}
.contact-form-panel h3 {
  font-size: 1.6rem;
  margin-bottom: 8px;
}
.form-trust {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.7rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--text-muted);
  margin-bottom: 32px;
  display: flex; align-items: center; gap: 8px;
}
.form-trust i { color: var(--gold); }
.form-group { margin-bottom: 24px; }
.form-group label {
  display: block;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--text-muted);
  margin-bottom: 10px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  background: var(--black);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  padding: 14px 18px;
  color: var(--text);
  font-family: 'Hind Siliguri', sans-serif;
  font-size: 0.95rem;
  transition: var(--transition);
  outline: none;
}
.form-group input:focus,
.form-group textarea:focus { border-color: var(--gold); box-shadow: 0 0 0 3px rgba(26,109,191,0.10); }
.form-group textarea { min-height: 120px; resize: vertical; }
.form-alert {
  padding: 14px 18px;
  border-radius: var(--radius);
  margin-bottom: 24px;
  font-size: 0.9rem;
  display: flex; align-items: center; gap: 10px;
}
.form-alert.success { background: rgba(39,174,96,0.08); border: 1px solid var(--green); color: #1a7a43; }
.form-alert.error   { background: rgba(192,57,43,0.08); border: 1px solid var(--red); color: #a02020; }

/* MAP */
.map-section { background: var(--deep); }
.map-embed {
  width: 100%;
  height: 400px;
  border: 1px solid var(--border);
  margin-top: 60px;
  overflow: hidden;
  position: relative;
  border-radius: var(--radius-lg);
}
.map-embed iframe { width: 100%; height: 100%; border: 0; filter: saturate(0.7) contrast(0.95); }

/* HOURS */
.hours-section { background: var(--black); }
.hours-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
  margin-top: 60px;
}
.hours-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  padding: 40px;
  display: flex; align-items: flex-start; gap: 20px;
  transition: var(--transition);
  border-radius: var(--radius-lg);
}
.hours-card:hover { border-color: var(--gold); background: var(--gold-pale); }
.hours-card i { font-size: 1.4rem; color: var(--gold); margin-top: 2px; }
.hours-card h4 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--text-muted);
  margin-bottom: 6px;
}
.hours-card p { font-size: 1.3rem; color: var(--navy); font-family: 'Playfair Display', serif; }

/* ═══════════════════════════════════════════════
   PAGE HEADING
═══════════════════════════════════════════════ */
.page-heading {
  padding: 160px 0 80px;
  background: linear-gradient(135deg, #0A1929 0%, #1A3A5C 100%);
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--border);
}
.page-heading::before {
  content: '';
  position: absolute; inset: 0;
  background: radial-gradient(ellipse 60% 60% at 50% 100%, rgba(46,138,232,0.15), transparent);
}
.page-heading .container { position: relative; z-index: 1; }
.page-heading h1 {
  font-size: clamp(2.5rem, 5vw, 4rem);
  margin-bottom: 16px;
  color: #FFFFFF;
}
.page-heading p {
  color: rgba(255,255,255,0.70);
  font-size: 1.1rem;
  max-width: 560px;
}
.page-heading .label-tag { color: #7EC8FF; }
.page-heading .label-tag::before { background: #7EC8FF; }
.breadcrumb {
  display: flex; align-items: center; gap: 10px;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.7rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgba(255,255,255,0.5);
  margin-bottom: 20px;
}
.breadcrumb a { color: #7EC8FF; }
.breadcrumb i { font-size: 0.5rem; }

/* ═══════════════════════════════════════════════
   CTA BANNER
═══════════════════════════════════════════════ */
.cta-banner {
  background: linear-gradient(135deg, #0A1929 0%, #1255A0 100%);
  padding: 100px 0;
  position: relative;
  overflow: hidden;
  text-align: center;
}
.cta-banner::before {
  content: '';
  position: absolute; inset: 0;
  background: radial-gradient(ellipse 80% 80% at 50% 100%, rgba(46,138,232,0.15), transparent);
}
.cta-banner .container { position: relative; z-index: 1; }
.cta-banner h2 {
  font-size: clamp(2rem, 4vw, 3.5rem);
  margin-bottom: 16px;
  color: #FFFFFF;
}
.cta-banner p { color: rgba(255,255,255,0.70); font-size: 1.05rem; margin-bottom: 40px; }
.cta-banner .label-tag { color: #7EC8FF; justify-content: center; }
.cta-banner .label-tag::before { background: #7EC8FF; }
.cta-checks {
  display: flex; justify-content: center; gap: 32px; flex-wrap: wrap;
  margin-bottom: 40px;
}
.cta-check {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.7rem; font-weight: 600; letter-spacing: 2px;
  text-transform: uppercase; color: rgba(255,255,255,0.65);
  display: flex; align-items: center; gap: 8px;
}
.cta-check i { color: #7EC8FF; }
.btn-group-center { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
/* white outline button in CTA */
.cta-banner .btn-outline {
  border-color: rgba(255,255,255,0.5);
  color: #FFFFFF;
}
.cta-banner .btn-outline:hover {
  background: rgba(255,255,255,0.10);
  border-color: #FFFFFF;
}

/* ═══════════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════════ */
.site-footer {
  background: var(--navy);
  border-top: 1px solid rgba(255,255,255,0.08);
  padding: 80px 0 0;
}
.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 60px;
  padding-bottom: 60px;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.footer-about .logo { margin-bottom: 20px; }
.footer-about .logo-name { color: #FFFFFF; }
.footer-about .logo-name small { color: #7EC8FF; }
.footer-about .logo-mark { border-color: #7EC8FF; color: #7EC8FF; background: rgba(126,200,255,0.08); }
.footer-about p { color: rgba(255,255,255,0.55); font-size: 0.9rem; line-height: 1.7; }
.footer-col h4 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #7EC8FF;
  margin-bottom: 24px;
}
.footer-col ul { display: flex; flex-direction: column; gap: 10px; }
.footer-col ul a {
  color: rgba(255,255,255,0.55);
  font-size: 0.9rem;
  transition: var(--transition);
  display: flex; align-items: center; gap: 8px;
}
.footer-col ul a::before { content: '—'; color: rgba(255,255,255,0.2); font-size: 0.7rem; }
.footer-col ul a:hover { color: #7EC8FF; padding-left: 4px; }
.footer-info-item {
  display: flex; align-items: flex-start; gap: 12px;
  margin-bottom: 12px;
  color: rgba(255,255,255,0.55);
  font-size: 0.88rem;
}
.footer-info-item i { color: #7EC8FF; margin-top: 3px; font-size: 0.8rem; }
.footer-bottom {
  padding: 28px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.68rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgba(255,255,255,0.35);
  flex-wrap: wrap; gap: 12px;
}
.footer-bottom-links { display: flex; gap: 24px; }
.footer-bottom-links a { color: rgba(255,255,255,0.35); transition: var(--transition); }
.footer-bottom-links a:hover { color: #7EC8FF; }

/* WHATSAPP FLOAT */
.whatsapp-float {
  position: fixed; bottom: 32px; right: 32px;
  width: 56px; height: 56px;
  background: #25D366;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.5rem;
  color: #FFFFFF;
  z-index: 500;
  box-shadow: 0 8px 30px rgba(37,211,102,0.4);
  transition: var(--transition);
}
.whatsapp-float:hover { transform: scale(1.1); box-shadow: 0 12px 40px rgba(37,211,102,0.6); }

/* TOAST */
.toast {
  position: fixed; bottom: 100px; right: 32px;
  background: var(--navy);
  border: 1px solid var(--gold);
  color: #FFFFFF;
  padding: 16px 24px;
  border-radius: var(--radius);
  font-size: 0.9rem;
  z-index: 9999;
  opacity: 0; visibility: hidden;
  transform: translateY(10px);
  transition: all 0.3s ease;
  box-shadow: 0 8px 32px rgba(26,109,191,0.20);
}
.toast.show { opacity: 1; visibility: visible; transform: translateY(0); }

/* ═══════════════════════════════════════════════
   ABOUT PAGE — EXTRA SECTIONS
═══════════════════════════════════════════════ */
.about-values-section { background: var(--deep); }
.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2px;
  background: var(--border);
  margin-top: 60px;
}
.value-card {
  background: var(--card-bg);
  padding: 48px 40px;
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}
.value-card:hover { background: var(--gold-pale); }
.value-card::after {
  content: '';
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--gold), var(--gold-light), transparent);
  transform: scaleX(0); transform-origin: left;
  transition: transform 0.4s ease;
}
.value-card:hover::after { transform: scaleX(1); }
.value-card i {
  font-size: 2rem; color: var(--gold);
  display: block; margin-bottom: 20px;
}
.value-card h3 {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.9rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 12px;
  color: var(--navy);
}
.value-card p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.7; }

.metrics-band {
  background: var(--navy);
  padding: 60px 0;
}
.metrics-band-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
}
.band-metric {
  text-align: center;
  padding: 40px;
  border-right: 1px solid rgba(255,255,255,0.08);
}
.band-metric:last-child { border-right: none; }
.band-metric-num {
  font-family: 'Playfair Display', serif;
  font-size: 3.5rem;
  color: #7EC8FF;
  line-height: 1;
  display: block;
}
.band-metric-lbl {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 0.65rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: rgba(255,255,255,0.45);
  margin-top: 10px;
  display: block;
}

/* ═══════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .hero-stats { display: none; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .about-split { grid-template-columns: 1fr; }
  .about-visual { display: none; }
  .machine-grid { grid-template-columns: 1fr; }
  .service-block.featured { grid-template-columns: 1fr; gap: 32px; }
  .service-block.featured { grid-column: span 1; }
  .services-main-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .desktop-nav, .header-actions { display: none; }
  .hamburger { display: flex; }
  .section-padding { padding: 60px 0; }
  .why-grid { grid-template-columns: 1fr; }
  .who-grid { grid-template-columns: 1fr 1fr; }
  .service-detail-item { grid-template-columns: 1fr; gap: 32px; }
  .service-detail-item.reverse { direction: ltr; }
  .contact-layout { grid-template-columns: 1fr; }
  .contact-form-panel { padding: 32px 24px; }
  .footer-grid { grid-template-columns: 1fr; }
  .faq-grid { grid-template-columns: 1fr; }
  .faq-item { border-right: none; }
  .values-grid { grid-template-columns: 1fr; }
  .metrics-band-grid { grid-template-columns: 1fr; }
  .band-metric { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.08); }
  .band-metric:last-child { border-bottom: none; }
  .hours-grid { grid-template-columns: 1fr; }
  .about-metrics { grid-template-columns: 1fr 1fr 1fr; }
  .hero-section { align-items: flex-end; padding-bottom: 80px; }
  .slide-content { padding: 0 20px; }
  .ticker-bar { display: none; }
}
</style>
</head>

<body>

<!-- ══════════════════════════
     INTRO OVERLAY
══════════════════════════ -->
<div id="intro-overlay">
  <div class="intro-inner">
    <div class="intro-emblem">CGTC</div>
    <div class="intro-name">Cumilla Gold<br>Testing Center</div>
    <div class="intro-sub">কুমিল্লা · বাংলাদেশ</div>
    <div class="intro-bar"></div>
  </div>
</div>

<!-- ══════════════════════════
     HEADER
══════════════════════════ -->
<header class="site-header" id="mainHeader">
  <div class="container header-inner">

    <a href="?page=home" class="logo">
      <div class="logo-mark">CGTC</div>
      <div class="logo-name">
        Cumilla Gold Testing
        <small>স্বর্ণ পরীক্ষা কেন্দ্র · কুমিল্লা</small>
      </div>
    </a>

    <nav class="desktop-nav">
      <a href="?page=home"    class="<?= $page==='home'    ? 'active':'' ?>">হোম</a>
      <a href="?page=about"   class="<?= $page==='about'   ? 'active':'' ?>">সম্পর্কে</a>
      <a href="?page=service" class="<?= $page==='service' ? 'active':'' ?>">সেবা</a>
      <a href="?page=contact" class="<?= $page==='contact' ? 'active':'' ?>">যোগাযোগ</a>
    </nav>

    <div class="header-actions">
      <a href="https://wa.me/8801XXXXXXXXX" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      <a href="tel:+8801XXXXXXXXX" title="কল করুন"><i class="fas fa-phone"></i></a>
    </div>

    <button class="hamburger" id="hamburgerBtn" aria-label="মেনু" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobileNav">
  <a href="?page=home"    class="<?= $page==='home'    ? 'active':'' ?>">হোম</a>
  <a href="?page=about"   class="<?= $page==='about'   ? 'active':'' ?>">সম্পর্কে</a>
  <a href="?page=service" class="<?= $page==='service' ? 'active':'' ?>">সেবা</a>
  <a href="?page=contact" class="<?= $page==='contact' ? 'active':'' ?>">যোগাযোগ</a>
  <div class="mobile-nav-footer">
    <a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="mob-wp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    <a href="tel:+8801XXXXXXXXX" class="mob-tel"><i class="fas fa-phone"></i> কল করুন</a>
  </div>
</div>

<!-- ══════════════════════════════════════════════════
     PAGE CONTENT
══════════════════════════════════════════════════ -->

<?php if ($page === 'home'): ?>

<!-- ═════ IMAGE SLIDER ═════ -->
<div class="img-slider-wrapper" id="imgSlider">

  <div class="img-slider-track" id="imgSliderTrack">
    <!-- REPLACE these src values with your actual 1366×768 banner image paths -->
    <img src="cumilla banner 1.png" alt="ব্যানার ১">
    <img src="cumilla banner 2.png" alt="ব্যানার ২">
    <img src="cumilla banner 3.png" alt="ব্যানার ৩">
    <img src="cumilla banner 4.png" alt="ব্যানার ৪">
  </div>

  <div class="img-slider-dots" id="imgSliderDots">
    <button class="active" data-index="0"></button>
    <button data-index="1"></button>
    <button data-index="2"></button>
    <button data-index="3"></button>
  </div>

</div>

<!-- ═════ ABOUT SECTION ═════ -->
<section class="about-section section-padding">
  <div class="container">
    <div class="about-split">
      <div class="about-visual">
        <div class="about-visual-frame">
          <img src="https://picsum.photos/seed/goldlabinside/800/600" alt="CGTC ল্যাব">
          <div class="about-badge">
            <span class="about-badge-num">৫+</span>
            <span class="about-badge-label">Years of Trust</span>
          </div>
        </div>
      </div>
      <div class="about-content">
        <div class="label-tag">আমাদের পরিচয়</div>
        <h2>বিশ্বাস, নির্ভুলতা ও স্বচ্ছতার প্রতিশ্রুতি</h2>
        <p>স্বর্ণ শুধু একটি ধাতু নয়—এটি আপনার সম্পদ, আপনার নিরাপত্তা এবং অনেক সময় আপনার পরিবারের স্মৃতি।</p>
        <p>কিন্তু ভুল ক্যারেট, মিশ্র ধাতু বা জালিয়াতির কারণে অনেক মানুষ প্রতিনিয়ত ক্ষতিগ্রস্ত হচ্ছে। Cumilla Gold Testing Center সেই সমস্যার সমাধান দিতে কাজ করছে।</p>
        <div class="about-highlight">আমাদের লক্ষ্য একটাই—আপনি যেন কখনো প্রতারিত না হন। প্রতিটি পরীক্ষা আপনার চোখের সামনে।</div>
        <a href="?page=about" class="btn-outline">আরও জানুন <i class="fas fa-arrow-right"></i></a>
        <div class="about-metrics">
          <div class="metric-item"><div class="metric-num">৫,০০০+</div><div class="metric-lbl">গ্রাহক</div></div>
          <div class="metric-item"><div class="metric-num">৯৯.৯%</div><div class="metric-lbl">নির্ভুলতা</div></div>
          <div class="metric-item"><div class="metric-num">৫+</div><div class="metric-lbl">বছর</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═════ SERVICES ═════ -->
<section class="services-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">আমাদের সেবাসমূহ</div>
      <h2>এক জায়গায় সম্পূর্ণ সমাধান</h2>
      <p>স্বর্ণ পরীক্ষা থেকে শুরু করে গহনা তৈরি পর্যন্ত সব ধরনের সেবা।</p>
    </div>
  </div>
  <div class="services-main-grid" style="max-width:1200px;margin:0 auto;padding:0 24px;">
    <div class="service-block featured">
      <div>
        <div class="service-block-icon"><i class="fas fa-microscope"></i></div>
        <h3>XRF Gold Testing — আমাদের প্রধান সেবা</h3>
        <p>XRF (X-Ray Fluorescence) প্রযুক্তি দিয়ে কোনো কাটাছেঁড়া ছাড়াই মাত্র ১-৫ মিনিটে সঠিক ক্যারেট ও ধাতব উপাদান জানুন। বিশ্বের সেরা জুয়েলারি কোম্পানিগুলো একই প্রযুক্তি ব্যবহার করে।</p>
        <br><a href="?page=service" class="btn-outline" style="margin-top:16px;">বিস্তারিত দেখুন <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-block-img">
        <img src="XRF Gold Testing.jpg" alt="XRF Testing">
        <div class="img-overlay"></div>
      </div>
      <div class="service-block-number">01</div>
    </div>
    <div class="service-block">
      <div class="service-block-number">02</div>
      <div class="service-block-icon"><i class="fas fa-flask"></i></div>
      <h3>Acid Testing</h3>
      <p>অতিরিক্ত যাচাইয়ের জন্য ঐতিহ্যবাহী এসিড পরীক্ষা পদ্ধতি। XRF টেস্টের পাশাপাশি ব্যবহৃত হয়।</p>
    </div>
    <div class="service-block">
      <div class="service-block-number">03</div>
      <div class="service-block-icon"><i class="fas fa-fire"></i></div>
      <h3>Fire Assay</h3>
      <p>সর্বোচ্চ নির্ভুলতার জন্য আন্তর্জাতিকভাবে স্বীকৃত ফায়ার অ্যাসে পদ্ধতি।</p>
    </div>
    <div class="service-block">
      <div class="service-block-number">04</div>
      <div class="service-block-icon"><i class="fas fa-certificate"></i></div>
      <h3>Hallmarking</h3>
      <p>স্বর্ণের বিশুদ্ধতার সরকারি স্বীকৃতি। আইনি সুরক্ষা ও ব্যবসায়িক বিশ্বাসযোগ্যতা নিশ্চিত করুন।</p>
    </div>
    <div class="service-block">
      <div class="service-block-number">05</div>
      <div class="service-block-icon"><i class="fas fa-atom"></i></div>
      <h3>Metal Analysis</h3>
      <p>স্বর্ণে মেশানো ধাতুর সঠিক শতাংশ জানুন। ব্যবসায়ীদের জন্য অত্যন্ত গুরুত্বপূর্ণ।</p>
    </div>
    <div class="service-block">
      <div class="service-block-number">06</div>
      <div class="service-block-icon"><i class="fas fa-temperature-high"></i></div>
      <h3>Gold Melting</h3>
      <p>পুরোনো গহনার স্বর্ণ গলিয়ে নতুনভাবে ব্যবহার করুন। আধুনিক পদ্ধতিতে কোনো অপচয় নেই।</p>
    </div>
    <div class="service-block">
      <div class="service-block-number">07</div>
      <div class="service-block-icon"><i class="fas fa-tools"></i></div>
      <h3>Jewellery Repair</h3>
      <p>ভাঙা, বাঁকা বা ক্ষতিগ্রস্ত গহনা দক্ষ কারিগরদের হাতে নতুনের মতো করে ঠিক করুন।</p>
    </div>
    <div class="service-block">
      <div class="service-block-number">08</div>
      <div class="service-block-icon"><i class="fas fa-pen-ruler"></i></div>
      <h3>Custom Design</h3>
      <p>আপনার নিজের পছন্দের ডিজাইনে গহনা তৈরি করুন। কল্পনাকে বাস্তবে রূপ দেবো আমরা।</p>
    </div>
  </div>
  <div style="text-align:center;margin-top:40px;">
    <a href="?page=service" class="btn-gold">সব সেবা দেখুন <i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<!-- ═════ WHY CHOOSE US ═════ -->
<section class="why-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">কেন আমরা?</div>
      <h2>হাজারো মানুষ আমাদের উপর ভরসা করে</h2>
      <p>আমাদের সেবার যে বৈশিষ্ট্যগুলো আমাদের আলাদা করে।</p>
    </div>
    <div class="why-grid">
      <div class="why-card"><i class="fas fa-eye why-icon"></i><h3>লাইভ টেস্টিং</h3><p>আপনার সামনে সবকিছু করা হয়। কোনো লুকানো প্রক্রিয়া নেই—পুরো পরীক্ষা আপনি নিজে দেখতে পাবেন।</p></div>
      <div class="why-card"><i class="fas fa-bullseye why-icon"></i><h3>৯৯.৯% নির্ভুলতা</h3><p>আন্তর্জাতিক মানের XRF প্রযুক্তি ব্যবহার করায় আমাদের ফলাফল প্রায় নিখুঁত।</p></div>
      <div class="why-card"><i class="fas fa-bolt why-icon"></i><h3>দ্রুত সার্ভিস</h3><p>মাত্র কয়েক মিনিটেই ফলাফল হাতে পাবেন। দীর্ঘ অপেক্ষার কোনো প্রয়োজন নেই।</p></div>
      <div class="why-card"><i class="fas fa-wallet why-icon"></i><h3>সাশ্রয়ী মূল্য</h3><p>সবার জন্য সহজলভ্য মূল্যে সেবা পাবেন। সততার মূল্য সবার জন্য।</p></div>
      <div class="why-card"><i class="fas fa-file-alt why-icon"></i><h3>বিশ্বাসযোগ্য রিপোর্ট</h3><p>বিক্রয় ও ব্যবসার জন্য উপযোগী বিস্তারিত রিপোর্ট প্রদান করা হয়।</p></div>
      <div class="why-card"><i class="fas fa-user-shield why-icon"></i><h3>নিরাপদ প্রক্রিয়া</h3><p>স্বর্ণের কোনো ক্ষতি হয় না। সম্পূর্ণ নন-ডেস্ট্রাকটিভ পদ্ধতিতে পরীক্ষা করা হয়।</p></div>
    </div>
  </div>
</section>

<!-- ═════ MACHINE ═════ -->
<section class="machine-section section-padding">
  <div class="container">
    <div class="machine-grid">
      <div class="machine-img-wrap">
        <img src="gold machine.png" alt="XRF স্পেকট্রোমিটার">
        <div class="machine-badge">আন্তর্জাতিক<br>মানের<br>প্রযুক্তি</div>
      </div>
      <div class="machine-text">
        <div class="label-tag">আমাদের প্রযুক্তি</div>
        <h2>আধুনিক XRF স্পেকট্রোমিটার</h2>
        <p>আমরা আন্তর্জাতিক মানের XRF স্পেকট্রোমিটার ব্যবহার করি যা স্বর্ণের ভেতরের গঠন বিশ্লেষণ করে।</p>
        <p>এই প্রযুক্তি সম্পূর্ণ নিরাপদ এবং কোনো ক্ষতি ছাড়াই সঠিক ফলাফল দেয়। বিশ্বের বড় বড় জুয়েলারি কোম্পানিগুলো একই প্রযুক্তি ব্যবহার করে।</p>
        <div class="machine-note"><i class="fas fa-eye"></i> আপনি নিজে দাঁড়িয়ে থেকে পুরো প্রক্রিয়া দেখতে পারবেন</div>
      </div>
    </div>
  </div>
</section>

<!-- ═════ FAQ ═════ -->
<section class="faq-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">সচরাচর জিজ্ঞাসা</div>
      <h2>আপনার প্রশ্নের উত্তর</h2>
    </div>
    <div class="faq-grid">
      <div class="faq-item open"><button class="faq-question">টেস্ট করতে কত সময় লাগে? <i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>সাধারণত ১–৫ মিনিটের মধ্যেই XRF টেস্ট সম্পন্ন হয়। আপনি দাঁড়িয়ে থেকেই ফলাফল দেখতে পাবেন।</p></div></div>
      <div class="faq-item"><button class="faq-question">স্বর্ণের ক্ষতি হয় কি? <i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>না, এটি সম্পূর্ণ নিরাপদ এবং নন-ডেস্ট্রাকটিভ। XRF পদ্ধতিতে স্বর্ণের কোনো অংশ কাটা বা গলানোর প্রয়োজন নেই।</p></div></div>
      <div class="faq-item"><button class="faq-question">আমি কি সামনে থেকে দেখতে পারবো? <i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>হ্যাঁ, আমরা সবকিছু আপনার সামনে করি। লাইভ টেস্টিং আমাদের অন্যতম প্রধান বৈশিষ্ট্য।</p></div></div>
      <div class="faq-item"><button class="faq-question">টেস্টিংয়ের খরচ কত? <i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>টেস্টিংয়ের খরচ সার্ভিসের উপর নির্ভর করে। তবে আমরা সাশ্রয়ী মূল্যে সেবা প্রদান করি। বিস্তারিত জানতে যোগাযোগ করুন।</p></div></div>
      <div class="faq-item"><button class="faq-question">অ্যাপয়েন্টমেন্ট লাগবে কি? <i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>না, অ্যাপয়েন্টমেন্টের কোনো প্রয়োজন নেই। আমাদের খোলার সময়ে সরাসরি চলে আসুন।</p></div></div>
      <div class="faq-item"><button class="faq-question">হলমার্কিং জন্য কত সময় লাগবে? <i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>সাধারণত ১০ থেকে ৩০ মিনিটের মধ্যে হলমার্কিং সম্পন্ন হয়। বিস্তারিত জানতে যোগাযোগ করুন।</p></div></div>
    </div>
  </div>
</section>

<!-- ═════ CTA ═════ -->
<section class="cta-banner">
  <div class="container">
    <div class="label-tag">স্বর্ণের ক্ষেত্রে আর ঝুঁকি নয়</div>
    <h2>আজই আপনার স্বর্ণ নিয়ে আসুন</h2>
    <p>মাত্র কয়েক মিনিটে নিশ্চিত ফলাফল পান। সম্পূর্ণ লাইভ, কোনো আড়াল নেই।</p>
    <div class="cta-checks">
      <div class="cta-check"><i class="fas fa-check"></i> অ্যাপয়েন্টমেন্ট প্রয়োজন নেই</div>
      <div class="cta-check"><i class="fas fa-check"></i> সরাসরি চলে আসুন</div>
      <div class="cta-check"><i class="fas fa-check"></i> সপ্তাহের ৭ দিন খোলা</div>
    </div>
    <div class="btn-group-center">
      <a href="?page=contact" class="btn-gold">এখনই ভিজিট করুন <i class="fas fa-arrow-right"></i></a>
      <a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="btn-outline"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
  </div>
</section>

<?php elseif ($page === 'about'): ?>

<section class="page-heading">
  <div class="container">
    <!-- <div class="breadcrumb"><a href="?page=home">হোম</a><i class="fas fa-chevron-right"></i> আমাদের সম্পর্কে</div> -->
    <div class="label-tag">আমাদের পরিচয়</div>
    <h1>আমাদের সম্পর্কে</h1>
    <p>জানুন কেন আমরা কুমিল্লার মানুষের বিশ্বাস অর্জন করতে পেরেছি</p>
  </div>
</section>

<!-- STORY -->
<section class="about-section section-padding">
  <div class="container">
    <div class="about-split">
      <div class="about-visual">
        <div class="about-visual-frame">
          <img src="cumilla gold testing office.png" alt="CGTC এর গল্প">
          <div class="about-badge">
            <span class="about-badge-num">৫+</span>
            <span class="about-badge-label">Years</span>
          </div>
        </div>
      </div>
      <div class="about-content">
        <div class="label-tag">আমাদের যাত্রা</div>
        <h2>একটি স্বপ্ন থেকে কুমিল্লার বিশ্বস্ত কেন্দ্র</h2>
        <p>Cumilla Gold Testing Center শুরু হয়েছিল একটি স্পষ্ট লক্ষ্য নিয়ে—মানুষ যেন স্বর্ণ কেনা-বেচায় আর প্রতারিত না হয়।</p>
        <p>শুরুতে ছোট একটি সেটআপ থাকলেও, আমাদের সততা ও নির্ভুলতার কারণে খুব দ্রুত কুমিল্লার মানুষের আস্থা অর্জন করি।</p>
        <p>আজ আমরা একটি আধুনিক ল্যাব হিসেবে প্রতিদিন অসংখ্য গ্রাহককে সঠিক তথ্য ও নিশ্চয়তা প্রদান করছি।</p>
        <div class="about-highlight">আমরা বিশ্বাস করি, স্বচ্ছতাই সবচেয়ে বড় বিজ্ঞাপন। তাই আমরা সবকিছু গ্রাহকের সামনে করি—কোনো আড়াল নেই।</div>
      </div>
    </div>
  </div>
</section>

<!-- METRICS BAND -->
<div class="metrics-band">
  <div class="container">
    <div class="metrics-band-grid">
      <div class="band-metric"><span class="band-metric-num">৫,০০০+</span><span class="band-metric-lbl">সন্তুষ্ট গ্রাহক</span></div>
      <div class="band-metric"><span class="band-metric-num">৯৯.৯%</span><span class="band-metric-lbl">নির্ভুল ফলাফল</span></div>
      <div class="band-metric"><span class="band-metric-num">৫+</span><span class="band-metric-lbl">বছরের অভিজ্ঞতা</span></div>
    </div>
  </div>
</div>

<!-- VALUES -->
<section class="about-values-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">আমাদের মূলনীতি</div>
      <h2>কেন আমরা আলাদা?</h2>
      <p>আমাদের মূলনীতিগুলো যা আমাদের কাজকে নির্ধারণ করে।</p>
    </div>
    <div class="values-grid">
      <div class="value-card"><i class="fas fa-handshake"></i><h3>সততা</h3><p>আমরা কখনো মিথ্যা রিপোর্ট দিই না। যা আছে তাই দেখাই—এটিই আমাদের নীতি। কোনো লুকোচুরি নেই।</p></div>
      <div class="value-card"><i class="fas fa-gem"></i><h3>দক্ষতা</h3><p>অভিজ্ঞ টিম এবং আধুনিক মেশিনের সমন্বয়ে আমরা সর্বোচ্চ মানের সেবা দিই।</p></div>
      <div class="value-card"><i class="fas fa-heart"></i><h3>গ্রাহকসেবা</h3><p>প্রতিটি গ্রাহককে সম্মান দিয়ে তাদের প্রশ্নের উত্তর দেওয়া আমাদের অঙ্গীকার।</p></div>
    </div>
  </div>
</section>

<!-- WHY -->
<section class="why-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">আমাদের বিশেষত্ব</div>
      <h2>যা আমাদের অন্যদের থেকে আলাদা করে</h2>
    </div>
    <div class="why-grid">
      <div class="why-card"><i class="fas fa-eye why-icon"></i><h3>লাইভ টেস্টিং</h3><p>আপনার সামনে সবকিছু করা হয়।</p></div>
      <div class="why-card"><i class="fas fa-bullseye why-icon"></i><h3>৯৯.৯% নির্ভুল</h3><p>আন্তর্জাতিক মানের প্রযুক্তি।</p></div>
      <div class="why-card"><i class="fas fa-shield-alt why-icon"></i><h3>নিরাপদ প্রক্রিয়া</h3><p>স্বর্ণের কোনো ক্ষতি হয় না।</p></div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <div class="label-tag">আমাদের সেবা</div>
    <h2>আমাদের সেবা দেখুন</h2>
    <p>আমরা কি কি সেবা প্রদান করি তা জানতে নিচে ক্লিক করুন।</p>
    <div class="btn-group-center">
      <a href="?page=service" class="btn-gold"><i class="fas fa-cogs"></i> সেবাসমূহ</a>
      <a href="?page=contact" class="btn-outline"><i class="fas fa-envelope"></i> যোগাযোগ করুন</a>
    </div>
  </div>
</section>

<?php elseif ($page === 'service'): ?>

<section class="page-heading">
  <div class="container">
    <!-- <div class="breadcrumb"><a href="?page=home">হোম</a><i class="fas fa-chevron-right"></i> সেবাসমূহ</div> -->
    <div class="label-tag">পেশাদার সেবা</div>
    <h1>আমাদের পেশাদার সেবা</h1>
    <p>স্বর্ণ পরীক্ষা থেকে শুরু করে গহনা তৈরি পর্যন্ত সম্পূর্ণ সমাধান।</p>
  </div>
</section>

<!-- SERVICE DETAILS -->
<section class="service-detail-section section-padding">
  <div class="container">

    <div class="service-detail-item">
      <img src="https://picsum.photos/seed/xrftest/700/500" alt="XRF Gold Testing">
      <div>
        <div class="label-tag">সেবা ০১</div>
        <h3>XRF Gold Testing — কাটাছেঁড়া ছাড়াই নির্ভুল পরীক্ষা</h3>
        <p>XRF (X-Ray Fluorescence) প্রযুক্তি বিশ্বের সবচেয়ে উন্নত স্বর্ণ পরীক্ষা পদ্ধতি। কোনো কাটা, গলানো বা ক্ষতি ছাড়াই মাত্র ১-৫ মিনিটে আপনি সঠিক ক্যারেট ও ধাতব উপাদান জানতে পাবেন।</p>
        <a href="?page=contact" class="btn-gold" style="margin-top:8px;">টেস্ট করুন <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="service-detail-item reverse">
      <img src="https://picsum.photos/seed/acidtest/700/500" alt="Acid Testing">
      <div>
        <div class="label-tag">সেবা ০২</div>
        <h3>Acid Testing — অতিরিক্ত যাচাইয়ের জন্য</h3>
        <p>এসিড টেস্টিং হলো একটি ঐতিহ্যবাহী পদ্ধতি যা স্বর্ণের প্রকৃতি যাচাই করতে ব্যবহৃত হয়। বিশেষ এসিড দিয়ে পরীক্ষা করে স্বর্ণের বিশুদ্ধতা নিশ্চিত করা হয়।</p>
      </div>
    </div>

    <div class="service-detail-item">
      <img src="https://picsum.photos/seed/fireassay/700/500" alt="Fire Assay">
      <div>
        <div class="label-tag">সেবা ০৩</div>
        <h3>Fire Assay — সর্বোচ্চ নির্ভুলতা</h3>
        <p>ফায়ার অ্যাসে হলো স্বর্ণ পরীক্ষার সবচেয়ে নির্ভুল ও আন্তর্জাতিকভাবে স্বীকৃত পদ্ধতি। সাধারণত বড় আকারের স্বর্ণ বা ব্যবসায়িক উদ্দেশ্যে ব্যবহৃত হয়।</p>
      </div>
    </div>

    <div class="service-detail-item reverse">
      <img src="https://picsum.photos/seed/hallmark/700/500" alt="Hallmarking">
      <div>
        <div class="label-tag">সেবা ০৪</div>
        <h3>Hallmarking — অফিসিয়াল স্বীকৃতি</h3>
        <p>হলমার্কিং হলো স্বর্ণের বিশুদ্ধতার সরকারি স্বীকৃতি। হলমার্ক চিহ্নিত স্বর্ণ বিক্রি ও কেনার ক্ষেত্রে আপনার আইনি সুরক্ষা নিশ্চিত হয়।</p>
      </div>
    </div>

    <div class="service-detail-item">
      <img src="https://picsum.photos/seed/metalanalysis/700/500" alt="Metal Analysis">
      <div>
        <div class="label-tag">সেবা ০৫</div>
        <h3>Metal Analysis — ধাতুর গঠন বিশ্লেষণ</h3>
        <p>স্বর্ণে কি কি ধাতু মেশানো আছে, তার সঠিক শতাংশ জানতে মেটাল অ্যানালাইসিস করা হয়। বিশেষ করে জুয়েলারি ব্যবসায়ীদের জন্য অত্যন্ত গুরুত্বপূর্ণ।</p>
      </div>
    </div>

    <div class="service-detail-item reverse">
      <img src="https://picsum.photos/seed/goldmelt/700/500" alt="Gold Melting">
      <div>
        <div class="label-tag">সেবা ০৬</div>
        <h3>Gold Melting — পুরোনো স্বর্ণ নতুনভাবে ব্যবহার</h3>
        <p>পুরোনো বা ভাঙা গহনার স্বর্ণ গলিয়ে নতুন রূপে ব্যবহার করা যায়। আধুনিক মেশিনে নিরাপদে স্বর্ণ গলানোর সেবা প্রদান করি—কোনো স্বর্ণ নষ্ট হয় না।</p>
      </div>
    </div>

    <div class="service-detail-item">
      <img src="https://picsum.photos/seed/jewelrepair/700/500" alt="Jewellery Repair">
      <div>
        <div class="label-tag">সেবা ০৭</div>
        <h3>Jewellery Repair — ভাঙা গহনা ঠিক করা</h3>
        <p>ভাঙা, বাঁকা বা ক্ষতিগ্রস্ত গহনা দক্ষ কারিগরদের হাতে নতুনের মতো করে ঠিক করা হয়। সাধারণ মেরামত থেকে জটিল কাজ পর্যন্ত সব ধরনের রিপেয়ার করি।</p>
      </div>
    </div>

    <div class="service-detail-item reverse">
      <img src="https://picsum.photos/seed/customjewel/700/500" alt="Custom Design">
      <div>
        <div class="label-tag">সেবা ০৮</div>
        <h3>Custom Design — নিজের ডিজাইনে গহনা তৈরি</h3>
        <p>আপনার নিজের পছন্দের ডিজাইনে গহনা তৈরি করতে চান? আমাদের অভিজ্ঞ ডিজাইনার ও কারিগর টিম আপনার কল্পনাকে বাস্তবে রূপ দেবে।</p>
      </div>
    </div>

  </div>
</section>

<!-- WHO SHOULD -->
<section class="why-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">কে এই সার্ভিস নেবেন?</div>
      <h2>যাদের জন্য আমাদের সেবা অত্যন্ত প্রয়োজনীয়</h2>
    </div>
    <div class="who-grid">
      <div class="who-card"><span class="who-icon">💰</span><h4>স্বর্ণ বিক্রির আগে</h4><p>সঠিক মূল্য পেতে বিক্রির আগে অবশ্যই পরীক্ষা করুন।</p></div>
      <div class="who-card"><span class="who-icon">🛒</span><h4>নতুন স্বর্ণ কেনার আগে</h4><p>প্রতারিত হওয়া থেকে বাঁচতে কেনার আগে যাচাই করুন।</p></div>
      <div class="who-card"><span class="who-icon">📋</span><h4>পুরোনো গহনা যাচাই</h4><p>বংশগত গহনার প্রকৃত মান জানতে আজই আসুন।</p></div>
      <div class="who-card"><span class="who-icon">🏪</span><h4>জুয়েলারি ব্যবসা</h4><p>কাস্টমারের বিশ্বাস অর্জনে সার্টিফাইড রিপোর্ট ব্যবহার করুন।</p></div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2>আপনার সেবা নিতে প্রস্তুত?</h2>
    <p>আজই আমাদের সাথে যোগাযোগ করুন।</p>
    <div class="btn-group-center">
      <a href="?page=contact" class="btn-gold">যোগাযোগ করুন <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<?php elseif ($page === 'contact'): ?>

<section class="page-heading">
  <div class="container">
    <!-- <div class="breadcrumb"><a href="?page=home">হোম</a><i class="fas fa-chevron-right"></i> যোগাযোগ</div> -->
    <div class="label-tag">যোগাযোগ করুন</div>
    <h1>যোগাযোগ করুন</h1>
    <p>আপনার প্রশ্ন বা সেবা নিতে আমাদের সাথে যোগাযোগ করুন।</p>
  </div>
</section>

<section class="contact-section section-padding">
  <div class="container">
    <div class="contact-layout">

      <div class="contact-info-panel">
        <div class="label-tag">সরাসরি যোগাযোগ</div>
        <h2>আমাদের সাথে কথা বলুন</h2>
        <p>আপনার যেকোনো প্রশ্নে আমরা সবসময় প্রস্তুত।</p>

        <a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="contact-action wp">
          <div class="contact-action-icon"><i class="fab fa-whatsapp"></i></div>
          <div class="contact-action-text"><strong>WhatsApp</strong><span>মেসেজ করুন</span></div>
          <i class="fas fa-arrow-right contact-action-arrow"></i>
        </a>
        <a href="https://facebook.com/" target="_blank" class="contact-action fb">
          <div class="contact-action-icon"><i class="fab fa-facebook-f"></i></div>
          <div class="contact-action-text"><strong>Facebook</strong><span>পেজে মেসেজ করুন</span></div>
          <i class="fas fa-arrow-right contact-action-arrow"></i>
        </a>
        <a href="tel:+8801XXXXXXXXX" class="contact-action tel">
          <div class="contact-action-icon"><i class="fas fa-phone"></i></div>
          <div class="contact-action-text"><strong>সরাসরি কল</strong><span>+880 1XXX-XXXXXX</span></div>
          <i class="fas fa-arrow-right contact-action-arrow"></i>
        </a>

        <div class="contact-info-box">
          <h4>দ্রুত তথ্য</h4>
          <div class="info-list-item"><i class="fas fa-map-marker-alt"></i><span>কুমিল্লা, বাংলাদেশ</span></div>
          <div class="info-list-item"><i class="fas fa-clock"></i><span>সকাল ৯টা – রাত ৯টা</span></div>
          <div class="info-list-item"><i class="fas fa-calendar-alt"></i><span>সপ্তাহের ৭ দিন খোলা</span></div>
          <div class="info-list-item"><i class="fas fa-check"></i><span>অ্যাপয়েন্টমেন্ট লাগবে না</span></div>
          <div class="info-list-item"><i class="fas fa-reply"></i><span>৩০–৬০ মিনিটের মধ্যে রিপ্লাই</span></div>
        </div>
      </div>

      <div class="contact-form-panel">
        <div class="label-tag">মেসেজ পাঠান</div>
        <h3>আমাদের লিখুন</h3>
        <div class="form-trust"><i class="fas fa-clock"></i> সাধারণত ৩০–৬০ মিনিটের মধ্যে রিপ্লাই দেই</div>

        <?php if ($formMsg === 'success'): ?>
          <div class="form-alert success"><i class="fas fa-check-circle"></i> আপনার মেসেজ সফলভাবে পাঠানো হয়েছে! আমরা শীঘ্রই যোগাযোগ করবো।</div>
        <?php elseif ($formMsg === 'error'): ?>
          <div class="form-alert error"><i class="fas fa-exclamation-circle"></i> সব ফিল্ড পূরণ করুন।</div>
        <?php endif; ?>

        <form method="POST" action="?page=contact">
          <div class="form-group">
            <label for="name">আপনার নাম *</label>
            <input type="text" id="name" name="name" placeholder="নাম লিখুন" required>
          </div>
          <div class="form-group">
            <label for="phone">ফোন নম্বর *</label>
            <input type="tel" id="phone" name="phone" placeholder="০১XXXXXXXXX" required>
          </div>
          <div class="form-group">
            <label for="message">বিস্তারিত *</label>
            <textarea id="message" name="message" placeholder="আপনার প্রয়োজন বিস্তারিত লিখুন—আমরা দ্রুত যোগাযোগ করবো।" required></textarea>
          </div>
          <button type="submit" class="btn-gold" style="width:100%;justify-content:center;">
            <i class="fas fa-paper-plane"></i> মেসেজ পাঠান
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- MAP -->
<section class="map-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">আমাদের অবস্থান</div>
      <h2>কুমিল্লা, বাংলাদেশ</h2>
    </div>
    <div class="map-embed">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.345!2d91.1838!3d23.4288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547f1b5c5c5c5c%3A0x5c5c5c5c5c5c5c5c!2sCumilla!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- HOURS -->
<section class="hours-section section-padding">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">খোলার সময়</div>
      <h2>সপ্তাহের ৭ দিন আপনার জন্য</h2>
    </div>
    <div class="hours-grid">
      <div class="hours-card"><i class="fas fa-clock"></i><div><h4>খোলার সময়</h4><p>সকাল ৯টা – রাত ৯টা</p></div></div>
      <div class="hours-card"><i class="fas fa-calendar-check"></i><div><h4>ছুটির দিন</h4><p>সপ্তাহের ৭ দিন খোলা</p></div></div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2>সরাসরি আসুন—আমরা অপেক্ষা করছি</h2>
    <p>যেকোনো সময় আপনার স্বর্ণ নিয়ে আসুন।</p>
    <div class="btn-group-center">
      <a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="btn-gold"><i class="fab fa-whatsapp"></i> WhatsApp এ মেসেজ করুন</a>
    </div>
  </div>
</section>

<?php endif; ?>

<!-- ══════════════════════════
     FOOTER
══════════════════════════ -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <div class="footer-about">
        <a href="?page=home" class="logo" style="margin-bottom:20px;display:inline-flex;">
          <div class="logo-mark">CGTC</div>
          <div class="logo-name">Cumilla Gold Testing<small>স্বর্ণ পরীক্ষা কেন্দ্র · কুমিল্লা</small></div>
        </a>
        <p>Cumilla Gold Testing Center কুমিল্লার একটি বিশ্বস্ত স্বর্ণ পরীক্ষা ও জুয়েলারি সেবা কেন্দ্র। আধুনিক প্রযুক্তিতে সঠিক ও স্বচ্ছ সেবা প্রদান করি আমরা।</p>
      </div>

      <div class="footer-col">
        <h4>ঠিকানা</h4>
        <div class="footer-info-item"><i class="fas fa-map-marker-alt"></i><span>কুমিল্লা, বাংলাদেশ</span></div>
        <div class="footer-info-item"><i class="fas fa-phone"></i><span>+880 1XXX-XXXXXX</span></div>
        <div class="footer-info-item"><i class="fab fa-whatsapp"></i><span>+880 1XXX-XXXXXX</span></div>
        <a href="https://maps.google.com/?q=Cumilla,Bangladesh" target="_blank" style="display:inline-flex;align-items:center;gap:6px;color:#7EC8FF;font-size:0.68rem;margin-top:12px;font-family:'Josefin Sans',sans-serif;letter-spacing:1px;text-transform:uppercase;">
          <i class="fas fa-external-link-alt"></i> Google Maps
        </a>
      </div>

      <div class="footer-col">
        <h4>দ্রুত লিংক</h4>
        <ul>
          <li><a href="?page=home">হোম</a></li>
          <li><a href="?page=about">আমাদের সম্পর্কে</a></li>
          <li><a href="?page=service">সেবাসমূহ</a></li>
          <li><a href="?page=contact">যোগাযোগ</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>খোলার সময়</h4>
        <div class="footer-info-item"><i class="fas fa-clock"></i><span>সকাল ৯টা – রাত ৯টা</span></div>
        <div class="footer-info-item"><i class="fas fa-calendar-alt"></i><span>সপ্তাহের ৭ দিন খোলা</span></div>
      </div>

    </div>
    <div class="footer-bottom">
      <span>© <?= date('Y') ?> Cumilla Gold Testing Center — সর্বস্বত্ব সংরক্ষিত</span>
      <div class="footer-bottom-links">
        <a href="?page=home">হোম</a>
        <a href="?page=service">সেবা</a>
        <a href="?page=contact">যোগাযোগ</a>
      </div>
    </div>
  </div>
</footer>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="whatsapp-float" title="WhatsApp এ মেসেজ করুন">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- TOAST -->
<div class="toast" id="toastMsg"></div>

<!-- ══════════════════════════
     JAVASCRIPT  (unchanged logic)
══════════════════════════ -->
<script>
/* ── INTRO OVERLAY ── */
(function () {
  var overlay = document.getElementById('intro-overlay');
  if (!overlay) return;
  if (sessionStorage.getItem('cgtc_intro_shown')) {
    overlay.style.transition = 'none';
    overlay.classList.add('hidden');
    return;
  }
  setTimeout(function () {
    overlay.classList.add('hidden');
    sessionStorage.setItem('cgtc_intro_shown', '1');
  }, 3600);
})();

/* ── HEADER SCROLL ── */
(function () {
  var header = document.getElementById('mainHeader');
  if (!header) return;
  function onScroll() { header.classList.toggle('scrolled', window.scrollY > 60); }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ── HAMBURGER ── */
(function () {
  var btn = document.getElementById('hamburgerBtn');
  var nav = document.getElementById('mobileNav');
  if (!btn || !nav) return;
  btn.addEventListener('click', function () {
    var open = nav.classList.toggle('show');
    btn.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', open);
    document.body.style.overflow = open ? 'hidden' : '';
  });
  nav.querySelectorAll('a').forEach(function (a) {
    a.addEventListener('click', function () {
      nav.classList.remove('show');
      btn.classList.remove('open');
      document.body.style.overflow = '';
    });
  });
  document.addEventListener('click', function (e) {
    if (nav.classList.contains('show') && !btn.contains(e.target) && !nav.contains(e.target)) {
      nav.classList.remove('show');
      btn.classList.remove('open');
      document.body.style.overflow = '';
    }
  });
})();

/* ── IMAGE SLIDER ── */
(function () {
  var track  = document.getElementById('imgSliderTrack');
  var dots   = document.querySelectorAll('#imgSliderDots button');
  if (!track) return;

  var total   = track.children.length;
  var current = 0;
  var timer;

  function goTo(i) {
    current = (i + total) % total;
    track.style.transform = 'translateX(-' + (current * 100) + '%)';
    dots.forEach(function (d, idx) {
      d.classList.toggle('active', idx === current);
    });
  }

  function startAuto() {
    clearInterval(timer);
    timer = setInterval(function () { goTo(current + 1); }, 3000);
  }

  /* touch/swipe support */
  var startX = 0;
  track.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, { passive: true });
  track.addEventListener('touchend', function (e) {
    var diff = startX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 40) { goTo(diff > 0 ? current + 1 : current - 1); startAuto(); }
  });

  startAuto();
})();

/* ── FAQ ── */
document.querySelectorAll('.faq-question').forEach(function (btn) {
  btn.addEventListener('click', function () {
    var item   = this.parentElement;
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(function (i) { i.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
  });
});

/* ── TOAST ── */
function showToast(msg) {
  var t = document.getElementById('toastMsg');
  if (!t) return;
  t.textContent = msg;
  t.classList.add('show');
  setTimeout(function () { t.classList.remove('show'); }, 3000);
}

<?php if ($formMsg === 'success'): ?>
showToast('✅ আপনার মেসেজ সফলভাবে পাঠানো হয়েছে!');
<?php endif; ?>

/* ── SCROLL REVEAL ── */
(function () {
  var els = document.querySelectorAll('.service-block, .why-card, .who-card, .value-card, .hours-card, .metric-item, .about-content');
  if (!('IntersectionObserver' in window)) return;
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  els.forEach(function (el, i) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.transition = 'opacity 0.6s ease ' + (i * 0.05) + 's, transform 0.6s ease ' + (i * 0.05) + 's';
    obs.observe(el);
  });
})();
</script>

</body>
</html>