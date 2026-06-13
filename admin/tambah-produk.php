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
</head>
<body>

<h2>Tambah Produk</h2>

<form method="POST" enctype="multipart/form-data">

    <p>Nama Produk</p>
    <input type="text" name="name" required>

    <p>Harga</p>
    <input type="number" name="price" required>

    <p>Deskripsi</p>
    <textarea name="description" rows="5"></textarea>

    <p>Stok</p>
    <input type="number" name="stock" required>

    <p>Status</p>
    <select name="status">
        <option value="Ready">Ready</option>
        <option value="Tidak Ready">Tidak Ready</option>
    </select>

    <p>Foto Produk</p>
    <input type="file" name="image">

    <br><br>

    <button type="submit" name="simpan">
        Simpan Produk
    </button>

</form>

<br>

<a href="produk.php">← Kembali</a>

</body>
</html>