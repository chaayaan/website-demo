<?php
 $pageTitle = "সেবাসমূহ | নির্ভুল সোনা ও ধাতু পরীক্ষার বিশ্বস্ত ল্যাব";
 $pageDescription = "মক্কা গোল্ড ল্যাবে সোনা পরীক্ষা, ধাতু পরীক্ষা, জুয়েলারি হ্যালমার্কিং, মেল্টিং ও এক্সচেঞ্জসহ আধুনিক ও নির্ভুল সেবা প্রদান করা হয়।";
include 'header.php';
?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container">
        <nav class="breadcrumb-nav reveal">
            <a href="index.php">হোম</a>
            <i class="fas fa-chevron-right"></i>
            <span>সেবাসমূহ</span>
        </nav>
        <h1 class="reveal">আমাদের পেশাদার <span class="gold-text">সেবাসমূহ</span></h1>
        <p class="reveal">আধুনিক প্রযুক্তি ও অভিজ্ঞ টেকনিশিয়ানের মাধ্যমে প্রতিটি সেবা নির্ভুল, দ্রুত এবং স্বচ্ছভাবে প্রদান করি।</p>
    </div>
</section>

<section class="services-detail-section">
    <div class="container">
        <?php
        $services = [
            [
                "icon" => "fas fa-gem",
                "title" => "সোনা পরীক্ষা",
                "desc" => "আমরা অত্যাধুনিক পরীক্ষার যন্ত্র ব্যবহার করে সোনার বিশুদ্ধতা ও ক্যারেট নির্ভুলভাবে নির্ধারণ করি। প্রতিটি পরীক্ষা সম্পূর্ণ নিরাপদ, দ্রুত এবং ১০০% নির্ভরযোগ্য ফলাফল প্রদান করে।",
                "features" => ["ক্যারেট নির্ধারণ", "বিশুদ্ধতা যাচাই", "দ্রুত রিপোর্ট প্রদান"],
                "image" => "https://z-cdn-media.chatglm.cn/files/b31804db-6644-4014-a70e-5cf0691c6b0e.png",
                "badge" => "জনপ্রিয়"
            ],
            [
                "icon" => "fas fa-flask",
                "title" => "ধাতু পরীক্ষা",
                "desc" => "সোনা ছাড়া অন্যান্য মূল্যবান ধাতুর মান ও গুণাগুণ নির্ভুলভাবে বিশ্লেষণ করা হয়। আমাদের ল্যাবে প্রতিটি ধাতুর উপাদান নির্ধারণ করা হয় বৈজ্ঞানিক পদ্ধতিতে।",
                "features" => ["ধাতুর বিশুদ্ধতা পরীক্ষা", "কম্পোজিশন বিশ্লেষণ", "নির্ভরযোগ্য রিপোর্ট"],
                "image" => "https://z-cdn-media.chatglm.cn/files/4732150d-d7cc-40d3-aff3-588edd9fa2ed.png",
                "badge" => ""
            ],
            [
                "icon" => "fas fa-certificate",
                "title" => "জুয়েলারি হ্যালমার্কিং",
                "desc" => "আপনার গহনার আসল মান নিশ্চিত করতে আমরা আন্তর্জাতিক মান অনুযায়ী হ্যালমার্ক প্রদান করি। এটি আপনার জুয়েলারির বিশ্বাসযোগ্যতা ও মূল্য বাড়াতে সহায়তা করে।",
                "features" => ["অফিসিয়াল মার্কিং", "মান নিশ্চিতকরণ", "প্রিমিয়াম সার্টিফিকেশন"],
                "image" => "https://z-cdn-media.chatglm.cn/files/0ca87194-4790-41bd-aa78-5d5f90111e57.png",
                "badge" => "প্রিমিয়াম"
            ],
            [
                "icon" => "fas fa-fire",
                "title" => "ধাতু গলানো",
                "desc" => "পুরনো বা অপ্রয়োজনীয় সোনা ও ধাতু নিরাপদভাবে গলিয়ে নতুন রূপে প্রস্তুত করা হয়। এই প্রক্রিয়া সম্পূর্ণ নিয়ন্ত্রিত পরিবেশে করা হয়।",
                "features" => ["নিরাপদ প্রসেসিং", "আধুনিক ফার্নেস ব্যবহার", "সর্বোচ্চ বিশুদ্ধতা রক্ষা"],
                "image" => "https://z-cdn-media.chatglm.cn/files/b31804db-6644-4014-a70e-5cf0691c6b0e.png",
                "badge" => ""
            ],
            [
                "icon" => "fas fa-tools",
                "title" => "গহনা ওয়েল্ডিং",
                "desc" => "ভাঙা বা ক্ষতিগ্রস্ত গহনা দক্ষতার সাথে জোড়া লাগানো ও পুনরুদ্ধার করা হয়। আমাদের কাজের লক্ষ্য হলো আপনার গহনার আসল সৌন্দর্য ফিরিয়ে আনা।",
                "features" => ["সূক্ষ্ম জোড়ার কাজ", "গহনার ডিজাইন অক্ষুণ্ণ রাখা", "দক্ষ কারিগর দ্বারা কাজ"],
                "image" => "https://z-cdn-media.chatglm.cn/files/4732150d-d7cc-40d3-aff3-588edd9fa2ed.png",
                "badge" => ""
            ],
            [
                "icon" => "fas fa-exchange-alt",
                "title" => "সোনা বিনিময়",
                "desc" => "পুরনো সোনা বা গহনা বিনিময়ের জন্য আমরা স্বচ্ছ ও নির্ভরযোগ্য সেবা প্রদান করি। বাজারমূল্য অনুযায়ী সঠিক মূল্য নির্ধারণ করে লেনদেন করা হয়।",
                "features" => ["স্বচ্ছ মূল্য নির্ধারণ", "দ্রুত প্রসেস", "নিরাপদ লেনদেন"],
                "image" => "https://z-cdn-media.chatglm.cn/files/0ca87194-4790-41bd-aa78-5d5f90111e57.png",
                "badge" => "নতুন"
            ]
        ];
        
        foreach($services as $index => $service) {
            $isEven = $index % 2 == 0;
        ?>
            <div class="service-row <?php echo $isEven ? 'row-normal' : 'row-reverse'; ?> reveal">
                <div class="service-row-image">
                    <div class="service-img-wrap">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                        <?php if($service['badge']): ?>
                            <span class="service-badge"><?php echo $service['badge']; ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="service-row-content">
                    <div class="service-row-icon">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <span class="service-row-number">০<?php echo $index + 1; ?></span>
                    <h2><?php echo $service['title']; ?></h2>
                    <p><?php echo $service['desc']; ?></p>
                    <ul class="service-row-features">
                        <?php foreach($service['features'] as $feature) { ?>
                            <li><i class="fas fa-check-double"></i> <?php echo $feature; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag"><i class="fas fa-trophy"></i> কেন আমরা</span>
            <h2 class="section-title">কেন <span class="gold-text">মক্কা গোল্ড ল্যাব</span>?</h2>
            <p class="section-desc">আমরা শুধু একটি ল্যাব নই, আমরা বিশ্বাস ও নির্ভরতার প্রতীক</p>
        </div>
        
        <div class="why-grid reveal">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-microchip"></i></div>
                <h4>আধুনিক প্রযুক্তি</h4>
                <p>সর্বশেষ প্রযুক্তির যন্ত্রপাতি ব্যবহার</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-user-tie"></i></div>
                <h4>অভিজ্ঞ টেকনিশিয়ান</h4>
                <p>দক্ষ ও অভিজ্ঞ পেশাদার দল</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-bolt"></i></div>
                <h4>দ্রুত ফলাফল</h4>
                <p>১০-১৫ মিনিটে রিপোর্ট প্রদান</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-eye"></i></div>
                <h4>স্বচ্ছ সেবা</h4>
                <p>প্রতিটি ধাপে স্বচ্ছতা নিশ্চিত</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-heart"></i></div>
                <h4>গ্রাহক সন্তুষ্টি</h4>
                <p>গ্রাহক সন্তুষ্টি আমাদের প্রথম অগ্রাধিকার</p>
            </div>
        </div>
    </div>
</section>

<!-- Closing CTA -->
<section class="closing-cta">
    <div class="container">
        <div class="closing-grid reveal">
            <div class="closing-feature">
                <div class="closing-icon"><i class="fas fa-crosshairs"></i></div>
                <h4>নির্ভুলতা</h4>
            </div>
            <div class="closing-center">
                <h2>আপনার ধাতুর <span class="gold-text">সঠিক মূল্য</span> জানুন</h2>
                <p>আমরা সেই দায়িত্ব নিখুঁতভাবে পালন করি</p>
                <a href="contact.php" class="btn-gold">
                    <span>আজই যোগাযোগ করুন</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="closing-feature">
                <div class="closing-icon"><i class="fas fa-handshake"></i></div>
                <h4>বিশ্বাসযোগ্যতা</h4>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>