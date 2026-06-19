<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumbuTani.Nusantara - Pertanian Modern</title>
    <link rel="stylesheet" href="css/style.css?v=2">
</head>
<?php
session_start();
?>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

   <section class="hero"> <div class="hero-content animate-on-scroll"> <h1>Selamat Datang Di TumbuTani.Nusantara</h1>
    <p>Pusat inovasi dan budidaya Cabai Domba terbaik di Indonesia dengan metode pertanian berkelanjutan.</p> <a href="produk.php" class="btn-hero">Lihat Produk Kami</a> </div> </section>
</section>

    <!-- ===== INFO SLIDER ===== -->
    <section class="info-slider-section">
        <div class="info-slider-wrapper">
            <button class="slider-btn slider-prev" id="sliderPrev" aria-label="Sebelumnya">&#8249;</button>

            <div class="info-slider-track" id="infoSlider">

                <!-- Slide 1 -->
                <div class="info-slide active">
                    <div class="slide-icon">🌿</div>
                    <div class="slide-divider"></div>
                    <div class="slide-text">
                        <h3>Apa Itu TumbuTani?</h3>
                        <p>TumbuTani Nusantara adalah inisiatif yang berfokus pada pemberdayaan petani dan pengembangan pertanian berkelanjutan di Indonesia.</p>
                        <p>Melalui edukasi, pendampingan, dan kolaborasi, TumbuTani berupaya meningkatkan kesejahteraan petani sekaligus menjaga kelestarian lingkungan.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="info-slide">
                    <div class="slide-icon">🎯</div>
                    <div class="slide-divider"></div>
                    <div class="slide-text">
                        <h3>Visi dan Pertumbuhan Jangka Panjang</h3>
                        <p>Dari lahan TumbuTANI Nusantara di Tasikmalaya, kami membangun mimpi untuk pertanian Indonesia yang lebih mandiri dan modern.
                        </p>
                        <p>Kami percaya bahwa inovasi hulu ke hilir adalah kunci kesejahteraan petani di seluruh pelosok negeri.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="info-slide">
                    <div class="slide-icon">⚙️</div>
                    <div class="slide-divider"></div>
                    <div class="slide-text">
                        <h3>Teknologi dan Modernisasi Pertanian</h3>
                        <p>Kami mengintegrasikan teknologi pertanian modern untuk meningkatkan produktivitas dan kualitas hasil panen.Digitalisasi dan efisiensi menjadi fondasi pertumbuhan berkelanjutan.</p>
                        <p></p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="info-slide">
                    <div class="slide-icon">🤝</div>
                    <div class="slide-divider"></div>
                    <div class="slide-text">
                        <h3>Kemitraan & Distribusi</h3>
                        <p>TumbuTani menjalin kemitraan strategis dengan petani lokal, koperasi, dan distributor nasional untuk ekosistem yang kuat.</p>
                        <p>Jaringan distribusi kami menjangkau lebih dari 15 provinsi, memastikan produk segar tiba tepat waktu ke tangan konsumen.</p>
                    </div>
                </div>

            </div>

            <button class="slider-btn slider-next" id="sliderNext" aria-label="Berikutnya">&#8250;</button>
        </div>

        <!-- Dots -->
        <div class="slider-dots" id="sliderDots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
            <span class="dot" data-index="3"></span>
        </div>
    </section>
    <!-- ===== END SLIDER ===== -->

    <div class="container">
        <h2 class="section-title animate-on-scroll">Mengapa Memilih TumbuTani Nusantara</h2>
        <div class="grid-cards">
            <div class="card animate-on-scroll">
                <div class="card-body">
                    <h3 class="card-title">🌱 Bibit Unggulan</h3>
                    <p>Kami menyeleksi bibit cabai domba secara ketat untuk menghasilkan panen yang melimpah dan tahan cuaca ekstrem.</p>
                </div>
            </div>
            <div class="card animate-on-scroll">
                <div class="card-body">
                    <h3 class="card-title">⚙️ Pertanian Modern</h3>
                    <p>Memanfaatkan teknologi irigasi cerdas dan pemantauan kualitas tanah secara berkala.</p>
                </div>
            </div>
            <div class="card animate-on-scroll">
                <div class="card-body">
                    <h3 class="card-title">🤝 Pemberdayaan Petani</h3>
                    <p>Bekerja sama dengan petani lokal untuk memajukan kesejahteraan dan ekosistem pertanian daerah.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="founder-section">
    <div class="container">
        <h2 class="founder-title">Founder Team</h2>
        <div class="founder-line"></div>
        <div class="founder-grid">
            <div class="founder-card animate-on-scroll">
                <img src="img/download.jpg" alt="Adlex">
                <h3>Adlex</h3>
                <p>Chief Executive Officer</p>
            </div>
            <div class="founder-card animate-on-scroll">
                <img src="img/Capture.PNG" alt="Yansoy">
                <h3>Yansoy</h3>
                <p>Head of Operations</p>
            </div>
        </div>
    </div>
</section>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js?v=2"></script>
    <script>
    // ===== INFO SLIDER SCRIPT =====
    (function() {
        var slides  = document.querySelectorAll('.info-slide');
        var dots    = document.querySelectorAll('.dot');
        var btnPrev = document.getElementById('sliderPrev');
        var btnNext = document.getElementById('sliderNext');

        if (!slides.length || !btnPrev || !btnNext) return;

        var current  = 0;
        var timer    = null;

        function goTo(n) {
            slides[current].classList.remove('active');
            dots[current].classList.remove('active');
            current = ((n % slides.length) + slides.length) % slides.length;
            slides[current].classList.add('active');
            dots[current].classList.add('active');
        }

        function startTimer() {
            clearInterval(timer);
            timer = setInterval(function() { goTo(current + 1); }, 5000);
        }

        btnNext.addEventListener('click', function() { goTo(current + 1); startTimer(); });
        btnPrev.addEventListener('click', function() { goTo(current - 1); startTimer(); });

        dots.forEach(function(dot) {
            dot.addEventListener('click', function() {
                goTo(parseInt(dot.getAttribute('data-index')));
                startTimer();
            });
        });

        startTimer();
    })();
    </script>
</body>
</html>