<?php
session_start();
include "../config/koneksi.php";

if(isset($_POST['simpan'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $status = $_POST['status'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    if(!empty($image)){
        move_uploaded_file($tmp, "../assets/".$image);
    } else {
        $image = "default.jpg";
    }

    $query = $pdo->prepare("
        INSERT INTO products
        (name, price, image, description, stock, status)
        VALUES
        (?, ?, ?, ?, ?, ?)
    ");

    $query->execute([
        $name,
        $price,
        $image,
        $description,
        $stock,
        $status
    ]);

    header("Location: produk.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>

    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/tambah-produk.css">
</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main">

    <div class="form-container">

        <h2>🌱 Tambah Produk Baru</h2>

        <p class="subtitle">
            Tambahkan produk baru ke katalog TumbuTani.
        </p>

        <form method="POST" enctype="multipart/form-data">

            <label>Nama Produk</label>
            <input type="text" name="name" required>

            <label>Harga</label>
            <input type="number" name="price" required>

            <label>Deskripsi</label>
            <textarea name="description"></textarea>

            <label>Stok</label>
            <input type="number" name="stock" required>

            <label>Status</label>

            <select name="status">
                <option value="Ready">Ready</option>
                <option value="Tidak Ready">Tidak Ready</option>
            </select>

            <label>Foto Produk</label>
            <input type="file" name="image">

            <button type="submit" name="simpan" class="btn-simpan">
                💾 Simpan Produk
            </button>

        </form>

    </div>

</div>

</body>
</html>