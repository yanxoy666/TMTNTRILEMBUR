<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabaiDomba Farm - Pertanian Modern</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
session_start();
?>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <section class="hero">
        <div class="hero-content animate-on-scroll">
            <h1>Selamat Datang Di TumbuTani.Nusantara</h1>
            <p>Pusat inovasi dan budidaya Cabai Domba terbaik di Indonesia dengan metode pertanian berkelanjutan.</p>
            <a href="produk.php" class="btn-hero">Lihat Produk Kami</a>
        </div>
    </section>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Mengapa Memilih CabaiDomba Farm?</h2>
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
                <img src="assets/img/download.jpg" alt="Yansoy">
                <h3>Yansoy</h3>
                <p>Head of Operations</p>
            </div>
        </div>
    </div>
</section>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>