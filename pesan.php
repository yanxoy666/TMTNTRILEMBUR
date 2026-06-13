<?php
session_start();
include "config/koneksi.php";

if(!isset($_GET['id'])){
    header("Location: produk.php");
    exit;
}

$id_produk = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id_produk]);
$produk = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$produk){
    die("Produk tidak ditemukan!");
}

if(isset($_POST['pesan'])){

    $nama_pembeli = $_POST['nama_pembeli'];
    $no_hp = $_POST['no_hp'];
    $jumlah = $_POST['jumlah'];

    $total_harga = $produk['price'] * $jumlah;

    $query = $pdo->prepare("
        INSERT INTO pesanan
        (
            produk_id,
            nama_pembeli,
            no_hp,
            jumlah,
            total_harga,
            status
        )
        VALUES
        (?, ?, ?, ?, ?, 'Menunggu')
    ");

$query->execute([
    $id_produk,
    $nama_pembeli,
    $no_hp,
    $jumlah,
    $total_harga
]);

// Kurangi stok produk
$sisa_stok = $produk['stock'] - $jumlah;

$status_produk = ($sisa_stok <= 0)
    ? 'Tidak Ready'
    : 'Ready';

$update = $pdo->prepare("
UPDATE products
SET stock=?,
    status=?
WHERE id=?
");

$update->execute([
    $sisa_stok,
    $status_produk,
    $id_produk
]);
    echo "
    <script>
        alert('Pesanan berhasil dibuat!');
        window.location='produk.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Produk</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:500px;
            margin:50px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        input{
            width:100%;
            padding:10px;
            margin-bottom:15px;
        }

        button{
            background:green;
            color:white;
            border:none;
            padding:10px 20px;
            cursor:pointer;
        }

        button:hover{
            background:darkgreen;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Form Pemesanan</h2>

    <hr>

    <h3><?= $produk['name']; ?></h3>

    <p>
        Harga :
        Rp <?= number_format($produk['price'],0,',','.'); ?>
    </p>

    <p>
        Stok :
        <?= $produk['stock']; ?>
    </p>

    <form method="POST">

        <label>Nama Pembeli</label>
        <input type="text"
               name="nama_pembeli"
               required>

        <label>No HP / WhatsApp</label>
        <input type="text"
               name="no_hp"
               required>

        <label>Jumlah Pesanan</label>
        <input type="number"
               name="jumlah"
               min="1"
               max="<?= $produk['stock']; ?>"
               required>

        <button type="submit" name="pesan">
            Pesan Sekarang
        </button>

    </form>

</div>

</body>
</html>