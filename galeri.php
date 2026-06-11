<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - CabaiDomba Farm</title>
    <link rel="stylesheet" href="css/galeri.css">
    <style>
        .embed-container { display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; margin-top: 30px; }
        .embed-box { background: #eee; width: 100%; max-width: 320px; height: 500px; display: flex; align-items: center; justify-content: center; border-radius: 10px; color: #888; text-align: center; padding: 20px;}
    </style>
</head>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Galeri Pertanian</h2>
        
        <div class="grid-cards">
            <div class="card animate-on-scroll">
                <img src="https://images.unsplash.com/photo-1598514982205-f36b96d1e8d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Panen Cabai">
                <div class="card-body"><p>Panen Raya Bulan Agustus</p></div>
            </div>
            <div class="card animate-on-scroll">
                <img src="https://images.unsplash.com/photo-1615486171430-819ce77d013e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Lahan Cabai">
                <div class="card-body"><p>Lahan Sektor Barat</p></div>
            </div>
            <div class="card animate-on-scroll">
                <img src="https://images.unsplash.com/photo-1506806732259-39c2d0268443?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60" alt="Sortir Cabai">
                <div class="card-body"><p>Proses Penyortiran Quality Control</p></div>
            </div>
        </div>

        <h2 class="section-title animate-on-scroll" style="margin-top: 50px;">Sosial Media Kami</h2>
        <div class="embed-container animate-on-scroll">
            <div class="embed-box">
                <p>Ganti dengan Embed Code TikTok (Dapatkan dari klik Share -> Embed di TikTok)</p>
            </div>
            <div class="embed-box">
                <p>Ganti dengan Embed Code Instagram (Dapatkan dari klik titik 3 -> Embed di Postingan IG)</p>
            </div>
        </div>
    </div>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>