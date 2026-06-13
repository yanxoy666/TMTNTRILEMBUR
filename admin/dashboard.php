<?php
session_start();
include "../config/koneksi.php";

$stok = $pdo->query("SELECT SUM(stock) as total FROM products")
            ->fetch(PDO::FETCH_ASSOC);

$pesanan = $pdo->query("SELECT COUNT(*) as total FROM pesanan")
               ->fetch(PDO::FETCH_ASSOC);

$ulasan = $pdo->query("SELECT COUNT(*) as total FROM ulasan")
              ->fetch(PDO::FETCH_ASSOC);

$user = $pdo->query("SELECT COUNT(*) as total FROM users")
            ->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/sidebar.css">
</head>

<body>

<?php include 'sidebar.php'; ?>

<div class="main">

    <h1>Dashboard Admin</h1>

    <div class="cards">

        <div class="card">
            <h3>Total Stok</h3>
            <p><?= $stok['total'] ?? 0 ?></p>
        </div>

        <div class="card">
            <h3>Pesanan Masuk</h3>
            <p><?= $pesanan['total'] ?? 0 ?></p>
        </div>

        <div class="card">
            <h3>Ulasan</h3>
            <p><?= $ulasan['total'] ?? 0 ?></p>
        </div>

        <div class="card">
            <h3>Total User</h3>
            <p><?= $user['total'] ?? 0 ?></p>
        </div>

    </div>

</div>

</body>
</html>