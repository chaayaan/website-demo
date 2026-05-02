<!DOCTYPE html>
<html lang="bn" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>যোগাযোগ — BISMILLAH Gold Lab কুমিল্লা | WhatsApp, ফোন, ঠিকানা</title>
  <meta name="description" content="BISMILLAH Gold Lab এর সাথে যোগাযোগ করুন। ঠিকানা: কুমিল্লা, বাংলাদেশ। সময়: সকাল ৯টা – রাত ৯টা। WhatsApp, ফোন কল বা সরাসরি ভিজিট করুন।">
  <meta name="keywords"    content="BISMILLAH Gold Lab যোগাযোগ, স্বর্ণ পরীক্ষা কুমিল্লা ঠিকানা, গোল্ড ল্যাব কুমিল্লা ফোন নম্বর">
  <meta name="robots"      content="index, follow">
  <meta name="google"      content="notranslate">
  <meta property="og:title"       content="যোগাযোগ — BISMILLAH Gold Lab কুমিল্লা">
  <meta property="og:description" content="ঠিকানা: কুমিল্লা, বাংলাদেশ। সময়: সকাল ৯টা – রাত ৯টা।">
  <meta property="og:type"   content="website">
  <meta property="og:locale" content="bn_BD">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<?php
$currentPage = 'contact';

// Handle form submission
$formMsg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
  $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
  $message = htmlspecialchars(trim($_POST['message'] ?? ''));
  if ($name && $phone && $message) {
    // mail('your@email.com', 'Contact from Gold Lab', "Name: $name\nPhone: $phone\nMessage: $message");
    $formMsg = 'success';
  } else {
    $formMsg = 'error';
  }
}

include('header.php');
?>

<!-- PAGE HEADING -->
<section class="page-heading">
  <div class="container">
    <h1>যোগাযোগ করুন</h1>
    <p>আপনার প্রশ্ন বা সেবা নিতে আমাদের সাথে যোগাযোগ করুন</p>
  </div>
</section>

<!-- CONTACT FORM & QUICK BUTTONS -->
<section class="contact-section section-padding">
  <div class="container">
    <div class="contact-grid">

      <!-- Left: Quick Actions -->
      <div class="contact-quick">
        <a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="contact-quick-btn wp">
          <i class="fab fa-whatsapp"></i>
          <div>
            <strong>WhatsApp</strong>
            <small style="display:block;color:var(--text-muted);font-size:0.85rem;">মেসেজ করুন</small>
          </div>
        </a>
        <a href="https://facebook.com/" target="_blank" class="contact-quick-btn fb">
          <i class="fab fa-facebook-f"></i>
          <div>
            <strong>Facebook</strong>
            <small style="display:block;color:var(--text-muted);font-size:0.85rem;">পেজে মেসেজ করুন</small>
          </div>
        </a>
        <a href="tel:+8801XXXXXXXXX" class="contact-quick-btn call">
          <i class="fas fa-phone"></i>
          <div>
            <strong>সরাসরি কল</strong>
            <small style="display:block;color:var(--text-muted);font-size:0.85rem;">+880 1XXX-XXXXXX</small>
          </div>
        </a>
        <div style="background:var(--bg-section);border-radius:var(--radius);padding:24px;margin-top:12px;border:1px solid var(--border);">
          <h4 style="color:var(--heading);margin-bottom:12px;font-size:1rem;"><i class="fas fa-info-circle" style="color:var(--gold);"></i> কিছু তথ্য</h4>
          <ul style="font-size:0.9rem;color:var(--text-muted);display:flex;flex-direction:column;gap:8px;">
            <li style="display:flex;align-items:flex-start;gap:8px;"><i class="fas fa-check" style="color:var(--btn-primary);margin-top:4px;"></i> অ্যাপয়েন্টমেন্ট লাগবে না</li>
            <li style="display:flex;align-items:flex-start;gap:8px;"><i class="fas fa-check" style="color:var(--btn-primary);margin-top:4px;"></i> সরাসরি চলে আসুন</li>
            <li style="display:flex;align-items:flex-start;gap:8px;"><i class="fas fa-check" style="color:var(--btn-primary);margin-top:4px;"></i> ৩০–৬০ মিনিটের মধ্যে রিপ্লাই</li>
          </ul>
        </div>
      </div>

      <!-- Right: Contact Form -->
      <div class="contact-form-wrap">
        <h3>মেসেজ পাঠান</h3>
        <p class="trust-line"><i class="fas fa-clock"></i> আমরা সাধারণত ৩০–৬০ মিনিটের মধ্যে রিপ্লাই দেই</p>

        <?php if ($formMsg === 'success'): ?>
          <div style="background:#d4edda;color:#155724;padding:14px 18px;border-radius:8px;margin-bottom:18px;font-size:0.92rem;">
            <i class="fas fa-check-circle"></i> আপনার মেসেজ সফলভাবে পাঠানো হয়েছে! আমরা শীঘ্রই যোগাযোগ করবো।
          </div>
        <?php elseif ($formMsg === 'error'): ?>
          <div style="background:#f8d7da;color:#721c24;padding:14px 18px;border-radius:8px;margin-bottom:18px;font-size:0.92rem;">
            <i class="fas fa-exclamation-circle"></i> সব ফিল্ড পূরণ করুন।
          </div>
        <?php endif; ?>

        <form method="POST" action="" id="contactForm">
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
          <button type="submit" class="btn-primary" style="width:100%;justify-content:center;">
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
    <h2 class="section-title">আমাদের অবস্থান</h2>
    <p class="section-subtitle">কুমিল্লা, বাংলাদেশ</p>
    <div class="map-wrapper">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.345!2d91.1838!3d23.4288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547f1b5c5c5c5c%3A0x5c5c5c5c5c5c5c5c!2sCumilla!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<!-- BUSINESS HOURS -->
<section class="hours-section section-padding">
  <div class="container">
    <h2 class="section-title">খোলার সময়</h2>
    <p class="section-subtitle">আমরা সপ্তাহের ৭ দিন আপনার জন্য উন্মুক্ত</p>
    <div class="hours-grid">
      <div class="hours-card">
        <i class="fas fa-clock"></i>
        <h4>খোলার সময়</h4>
        <p>সকাল ৯টা – রাত ৯টা</p>
      </div>
      <div class="hours-card">
        <i class="fas fa-calendar-check"></i>
        <h4>ছুটির দিন</h4>
        <p>সপ্তাহের ৭ দিন খোলা</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2>সরাসরি আসুন—আমরা অপেক্ষা করছি</h2>
    <p>যেকোনো সময় আপনার স্বর্ণ নিয়ে আসুন</p>
    <a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="btn-gold"><i class="fab fa-whatsapp"></i> WhatsApp এ মেসেজ করুন</a>
  </div>
</section>

<?php include('footer.php'); ?>

<script>
<?php if ($formMsg === 'success'): ?>
  showToast('✅ আপনার মেসেজ সফলভাবে পাঠানো হয়েছে!');
<?php endif; ?>
</script>