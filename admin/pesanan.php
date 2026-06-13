<?php
session_start();
include "../config/koneksi.php";
include "sidebar.php";

$query = $pdo->query("
SELECT
pesanan.*,
products.name AS nama_produk
FROM pesanan
LEFT JOIN products
ON pesanan.produk_id = products.id
ORDER BY pesanan.id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
<head>
    <title>Data Pesanan</title>

    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/pesanan.css">
</head>
</head>
<<body>

<?php include 'sidebar.php'; ?>

<div class="main">

    <a href="dashboard.php" class="back">
        ← Kembali ke Dashboard
    </a>

    <h2>Data Pesanan</h2>

    <div class="table-container">

        <table>

            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Pembeli</th>
                <th>No HP</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>

            <!-- isi looping pesanan tetap -->

        </table>

    </div>

</div>

</body>
</html>