<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitra & Program - CabaiDomba Farm</title>
    <link rel="stylesheet" href="css/mitra.css">
</head>
<?php
session_start();
?>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Mitra Kami</h2>
        <div class="grid-cards">
            <div class="card animate-on-scroll">
                <div class="card-body" style="text-align: center;">
                    <h3 class="card-title">Koperasi Tani Makmur</h3>
                    <p>Penyedia pupuk organik dan alat pertanian untuk jaringan petani kami.</p>
                </div>
            </div>
            <div class="card animate-on-scroll">
                <div class="card-body" style="text-align: center;">
                    <h3 class="card-title">Supermarket Segar</h3>
                    <p>Distributor utama untuk produk cabai segar grade A di area perkotaan.</p>
                </div>
            </div>
            <div class="card animate-on-scroll">
                <div class="card-body" style="text-align: center;">
                    <h3 class="card-title">Universitas Pertanian</h3>
                    <p>Mitra riset untuk pengembangan bibit unggul dan rekayasa genetika cabai.</p>
                </div>
            </div>
        </div>

        <h2 class="section-title animate-on-scroll" style="margin-top: 50px;">Program Kemitraan</h2>
        <div style="background: var(--white); padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);" class="animate-on-scroll">
            <h3 style="color: var(--primary-green); margin-bottom: 15px;">Program Petani Binaan</h3>
            <p style="margin-bottom: 15px;">Kami membuka peluang bagi para petani daerah untuk bergabung. Kami menyediakan bibit gratis, pendampingan dari hulu ke hilir, dan jaminan pembelian hasil panen dengan harga kompetitif.</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="btn-login" style="display: inline-block;">Daftar Menjadi Mitra</a>
        </div>
    </div>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>