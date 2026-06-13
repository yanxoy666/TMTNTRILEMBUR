<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - TumbuTani Nusantara</title>
    <link rel="stylesheet" href="css/tentang-kami.css">
</head>
<?php
session_start();
?>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Filosofi Perusahaan</h2>
        <div style="text-align:center; max-width: 800px; margin: auto; margin-bottom: 50px;" class="animate-on-scroll">
            <p>Warna hijau pada logo kami melambangkan dedikasi kami pada pelestarian alam dan kesuburan tanah Nusantara, sementara aksen oranye menyimbolkan semangat, inovasi, serta kualitas pedas khas Cabai Domba yang tiada duanya.</p>
        </div>

        <h2 class="section-title animate-on-scroll">Perjalanan Kami</h2>
        <div class="timeline">
            <div class="timeline-item left animate-on-scroll">
                <div class="timeline-content">
                    <h3>2023 - Awal Mula</h3>
                    <p>Didirikan sebagai lahan percobaan kecil untuk mencari varietas Cabai Domba yang paling adaptif.</p>
                </div>
            </div>
            <div class="timeline-item right animate-on-scroll">
                <div class="timeline-content">
                    <h3>2024 - Ekspansi Lahan</h3>
                    <p>Membuka lahan seluas 5 Hektar dan mulai memasok ke pasar tradisional di seluruh provinsi.</p>
                </div>
            </div>
            <div class="timeline-item left animate-on-scroll">
                <div class="timeline-content">
                    <h3>2025 - Teknologi Pintar</h3>
                    <p>Mengintegrasikan sistem IoT untuk kontrol kelembapan dan pupuk cair otomatis.</p>
                </div>
            </div>
            <div class="timeline-item right animate-on-scroll">
                <div class="timeline-content">
                    <h3>2026 - Go Nasional</h3>
                    <p>Membangun pabrik pengolahan turunan cabai (saus & bubuk) dan merangkul 500+ petani mitra.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>