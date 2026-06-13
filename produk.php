<?php
// Include koneksi database
include 'config/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - TumbuTani Nusantara</title>
    <link rel="stylesheet" href="css/produk.css">
</head>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Produk Unggulan Kami</h2>
        <div class="grid-cards">
            
            <?php
            try {
                $stmt = $pdo->query("SELECT * FROM produk ORDER BY id DESC");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    // Placeholder gambar jika file tidak ada
                    $foto = !empty($row['foto']) ? "assets/".$row['foto'] : "https://via.placeholder.com/300x200?text=Foto+Produk";
            ?>
                <div class="card animate-on-scroll">
                    <img src="<?= htmlspecialchars($foto) ?>" alt="<?= htmlspecialchars($row['nama']) ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?= htmlspecialchars($row['nama']) ?></h3>
                        <p class="card-price"><?= htmlspecialchars($row['harga']) ?></p>
                        <p><?= htmlspecialchars($row['deskripsi']) ?></p>
                        <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20memesan%20<?= urlencode($row['nama']) ?>" target="_blank" class="btn-login" style="display:inline-block; margin-top:15px; font-size:14px;">Beli via WhatsApp</a>
                    </div>
                </div>
            <?php
                }
            } catch (Exception $e) {
                echo "<p style='text-align:center;'>Gagal mengambil data produk: " . $e->getMessage() . "</p>";
            }
            ?>

        </div>
    </div>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>