<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    if(!isset($pageTitle)) $pageTitle = "মক্কা গোল্ড ল্যাব";
    if(!isset($pageDescription)) $pageDescription = "চট্টগ্রামের বিশ্বস্ত সোনা পরীক্ষার ল্যাব";
    ?>
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://z-cdn-media.chatglm.cn/files/b31804db-6644-4014-a70e-5cf0691c6b0e.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Preloader must be here so it renders BEFORE anything else */
        .preloader{
            position:fixed;inset:0;background:#0A0A0F;
            display:flex;align-items:center;justify-content:center;
            z-index:999999;transition:opacity .5s,visibility .5s;
        }
        .preloader.hidden{opacity:0;visibility:hidden;pointer-events:none}
        .preloader-inner{position:relative;text-align:center}
        .preloader-ring{
            position:absolute;border:2px solid transparent;
            border-radius:50%;animation:preloaderSpin 1.5s linear infinite;
        }
        .preloader-ring:nth-child(1){width:80px;height:80px;top:50%;left:50%;transform:translate(-50%,-50%);border-top-color:#D4AF37}
        .preloader-ring:nth-child(2){width:60px;height:60px;top:50%;left:50%;transform:translate(-50%,-50%);border-right-color:#F0D060;animation-duration:1.2s;animation-direction:reverse}
        .preloader-ring:nth-child(3){width:40px;height:40px;top:50%;left:50%;transform:translate(-50%,-50%);border-bottom-color:#B8941F;animation-duration:.8s}
        .preloader-text{position:relative;z-index:2;font-size:.82rem;color:#D4AF37;letter-spacing:3px;font-family:'Hind Siliguri',sans-serif}
        @keyframes preloaderSpin{to{transform:translate(-50%,-50%) rotate(360deg)}}
    </style>
</head>
<body>
    <!-- PRELOADER — first child of body, guaranteed to exist -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="preloader-ring"></div>
            <div class="preloader-ring"></div>
            <div class="preloader-ring"></div>
            <span class="preloader-text">মক্কা গোল্ড ল্যাব</span>
        </div>
    </div>

    <!-- Floating Gold Particles -->
    <div class="gold-particles" id="goldParticles"></div>

    <!-- Back to Top -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </button>

    <header class="header" id="header">
        <div class="header-glass">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <div class="logo-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="logo-text">
                            <h1>মক্কা গোল্ড ল্যাব</h1>
                        </div>
                    </div>
                    
                    <nav class="desktop-nav" id="desktopNav">
                        <ul>
                            <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                <span>হোম</span>
                            </a></li>
                            <li><a href="service.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'service.php' ? 'active' : ''; ?>">
                                <span>সেবাসমূহ</span>
                            </a></li>
                            <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                                <span>আমাদের সম্পর্কে</span>
                            </a></li>
                            <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                                <span>যোগাযোগ</span>
                            </a></li>
                        </ul>
                    </nav>
                    
                    <div class="header-actions">
                        <a href="#" class="header-social-btn facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://wa.me/01XXXXXXXXX" class="header-social-btn whatsapp" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="tel:01XXXXXXXXX" class="header-social-btn call" aria-label="Call">
                            <i class="fas fa-phone"></i>
                        </a>
                        <button class="hamburger" id="hamburger" aria-label="Menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mobile-nav" id="mobileNav">
            <div class="mobile-nav-inner">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i> হোম</a></li>
                    <li><a href="service.php"><i class="fas fa-concierge-bell"></i> সেবাসমূহ</a></li>
                    <li><a href="about.php"><i class="fas fa-info-circle"></i> আমাদের সম্পর্কে</a></li>
                    <li><a href="contact.php"><i class="fas fa-envelope"></i> যোগাযোগ</a></li>
                </ul>
                <div class="mobile-nav-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://wa.me/01XXXXXXXXX"><i class="fab fa-whatsapp"></i></a>
                    <a href="tel:01XXXXXXXXX"><i class="fas fa-phone"></i></a>
                </div>
            </div>
        </div>
    </header>