<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Col 1: About -->
      <div class="footer-about">
        <div class="logo">
          <div class="logo-icon">BGL</div>
          <div class="logo-text">
            BISMILLAH Gold Lab
            <small>স্বর্ণ পরীক্ষা কেন্দ্র</small>
          </div>
        </div>
        <p>BISMILLAH Gold Lab কুমিল্লার একটি বিশ্বস্ত স্বর্ণ পরীক্ষা ও জুয়েলারি সেবা কেন্দ্র। আধুনিক প্রযুক্তিতে সঠিক ও স্বচ্ছ সেবা প্রদান করি আমরা।</p>
      </div>

      <!-- Col 2: Address -->
      <div class="footer-col">
        <h4>ঠিকানা</h4>
        <div class="footer-info-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>কুমিল্লা, বাংলাদেশ</span>
        </div>
        <div class="footer-info-item">
          <i class="fas fa-phone"></i>
          <span>+880 1XXX-XXXXXX</span>
        </div>
        <div class="footer-info-item">
          <i class="fab fa-whatsapp"></i>
          <span>+880 1XXX-XXXXXX</span>
        </div>
        <a href="https://maps.google.com/?q=Cumilla,Bangladesh" target="_blank" style="display:inline-flex;align-items:center;gap:6px;color:var(--gold);font-size:0.88rem;margin-top:8px;">
          <i class="fas fa-external-link-alt"></i> Google Maps এ দেখুন
        </a>
      </div>

      <!-- Col 3: Quick Links -->
      <div class="footer-col">
        <h4>দ্রুত লিংক</h4>
        <ul>
          <li><a href="index.php">হোম</a></li>
          <li><a href="about.php">আমাদের সম্পর্কে</a></li>
          <li><a href="service.php">সেবাসমূহ</a></li>
          <li><a href="contact.php">যোগাযোগ</a></li>
        </ul>
      </div>

      <!-- Col 4: Hours -->
      <div class="footer-col">
        <h4>খোলার সময়</h4>
        <div class="footer-info-item">
          <i class="fas fa-clock"></i>
          <span>সকাল ৯টা – রাত ৯টা</span>
        </div>
        <div class="footer-info-item">
          <i class="fas fa-calendar-alt"></i>
          <span>সপ্তাহের ৭ দিন খোলা</span>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      © <?php echo date('Y'); ?> BISMILLAH Gold Lab — সর্বস্বত্ব সংরক্ষিত
    </div>
  </div>
</footer>

<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/8801XXXXXXXXX" target="_blank" class="whatsapp-float" title="WhatsApp এ মেসেজ করুন">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- TOAST -->
<div class="toast" id="toastMsg"></div>

<script>
function showToast(msg) {
  const t = document.getElementById('toastMsg');
  if (!t) return;
  t.textContent = msg;
  t.classList.add('show');
  setTimeout(function() { t.classList.remove('show'); }, 3000);
}
</script>

</body>
</html>