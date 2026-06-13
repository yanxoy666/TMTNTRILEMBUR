<?php
session_start();
include "../config/koneksi.php";

$stok = $pdo->query("SELECT SUM(stock) as total FROM products")
            ->fetch(PDO::FETCH_ASSOC);

$pesanan = $pdo->query("SELECT COUNT(*) as total FROM pesanan")
               ->fetch(PDO::FETCH_ASSOC);

$ulasan = $pdo->query("SELECT COUNT(*) as total FROM ulasan")
              ->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    display:flex;
    background:#f5f5f5;
}

.sidebar{
    width:250px;
    height:100vh;
    background:#2E7D32;
    position:fixed;
    left:0;
    top:0;
    padding-top:20px;
}

.logo{
    text-align:center;
    color:white;
    font-size:24px;
    font-weight:bold;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 25px;
}

.sidebar a:hover{
    background:#1B5E20;
}

.main{
    margin-left:250px;
    width:100%;
    padding:30px;
}

.cards{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
    margin-top:20px;
}

.card{
    background:white;
    width:280px;
    padding:25px;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
}

.card h3{
    color:#666;
}

.card p{
    font-size:35px;
    color:#2E7D32;
    font-weight:bold;
    margin-top:10px;
}

</style>

</head>
<body>

<div class="sidebar">

    <div class="logo">
        TumbuTani
    </div>

    <a href="dashboard.php">🏠 Dashboard</a>

    <a href="produk.php">📦 Produk</a>

    <a href="pesanan.php">🛒 Pesanan</a>

    <a href="ulasan.php">⭐ Ulasan</a>

    <a href="../logout.php">🚪 Logout</a>

</div>

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

    </div>

</div>

</body>
</html>