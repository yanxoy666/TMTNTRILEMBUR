<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - CabaiDomba Farm</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .embed-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }

        .embed-box {
            background: #eee;
            width: 100%;
            max-width: 320px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: #888;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Galeri Pertanian</h2>

        <div class="grid-cards">
            <div class="card animate-on-scroll">
                <img src="assets/foto/Lahan2.png" alt="Panen Cabai">
                <div class="card-body">
                    <p>Lahan bertani cabai</p>
                </div>
            </div>
            <div class="card animate-on-scroll">
                <img src="assets/foto/petanimenanam.png" alt="Lahan Cabai">
                <div class="card-body">
                    <p>Petani menanam cabai</p>
                </div>
            </div>
            <div class="card animate-on-scroll">
                <img src="assets/foto/Panencabai.png" alt="Sortir Cabai">
                <div class="card-body">
                    <p>Petani memanen cabai yang baru dipetik</p>
                </div>
            </div>
        </div>

        <h2 class="section-title animate-on-scroll" style="margin-top: 50px;">Sosial Media Kami</h2>

        <div class="embed-container animate-on-scroll" style="display: flex !important; justify-content: center !important; flex-wrap: wrap !important; gap: 40px !important; width: 100% !important;">

            <div class="embed-box" style="background: transparent;">
                <video width="100%" height="100%" controls style="border-radius: 10px;">
                    <source src="assets/ekspektasivsrealita.mp4" type="video/mp4">
                    Maaf, browser Anda tidak mendukung pemutar video ini.
                </video>
                <div class="tombol-play-custom">
                    <div class="ikon-play"></div>
                </div>
            </div>

            <div class="embed-box" style="background: transparent;">
                <video width="100%" height="100%" controls style="border-radius: 10px;">
                    <source src="assets/bertani.mp4" type="video/mp4">
                    Maaf, browser Anda tidak mendukung pemutar video ini.
                </video>
                <div class="tombol-play-custom">
                    <div class="ikon-play"></div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>

</html>