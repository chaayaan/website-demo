<?php
 $pageTitle = "যোগাযোগ | মক্কা গোল্ড ল্যাব চট্টগ্রাম";
 $pageDescription = "মক্কা গোল্ড ল্যাবের সাথে যোগাযোগ করুন। ঠিকানা: চট্টগ্রাম, বাংলাদেশ।";
include 'header.php';
?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container">
        <nav class="breadcrumb-nav reveal">
            <a href="index.php">হোম</a>
            <i class="fas fa-chevron-right"></i>
            <span>যোগাযোগ</span>
        </nav>
        <h1 class="reveal">যোগাযোগ <span class="gold-text">করুন</span></h1>
    </div>
</section>

<section class="contact-full-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info-cards reveal">
                <div class="info-card">
                    <div class="info-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>ঠিকানা</h4>
                        <p>চট্টগ্রাম, বাংলাদেশ</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <h4>মোবাইল</h4>
                        <p><a href="tel:01XXXXXXXXX">01XXXXXXXXX</a></p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon whatsapp-icon"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <h4>WhatsApp</h4>
                        <p><a href="https://wa.me/01XXXXXXXXX">Available</a></p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4>Email</h4>
                        <p><a href="mailto:info@makkagoldlab.com">info@makkagoldlab.com</a></p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4>সময়সূচী</h4>
                        <p>সকাল ১০টা – রাত ১০টা</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-card reveal">
                <div class="form-card-header">
                    <i class="fas fa-paper-plane"></i>
                    <h3>আপনার তথ্য দিন</h3>
                </div>
                <form id="contactForm">
                    <div class="form-floating-group">
                        <input type="text" id="name" name="name" required placeholder=" ">
                        <label for="name">আপনার নাম</label>
                    </div>
                    <div class="form-floating-group">
                        <input type="tel" id="phone" name="phone" required placeholder=" ">
                        <label for="phone">ফোন নম্বর</label>
                    </div>
                    <div class="form-floating-group">
                        <textarea id="message" name="message" rows="5" required placeholder=" "></textarea>
                        <label for="message">আপনার বার্তা</label>
                    </div>
                    <button type="submit" class="btn-gold btn-full">
                        <span>বার্তা পাঠান</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="contact-map-section reveal">
            <h3><i class="fas fa-map-marked-alt"></i> আমাদের অবস্থান</h3>
            <div class="map-wrapper">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14720.123456789!2d91.834567!3d22.345678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDIwJzQ0LjQiTiA5McKwNTAnMDQuNCJF!5e0!3m2!1sbn!2sbd!4v1234567890" 
                    width="100%" height="400" style="border:0; border-radius:16px;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>