<?php
session_start();
include "../config/koneksi.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);
$produk = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $status = $_POST['status'];

    if($_FILES['image']['name'] != ''){

        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file(
            $tmp,
            "../assets/".$image
        );

        $query = $pdo->prepare("
        UPDATE products
        SET
        name=?,
        price=?,
        image=?,
        description=?,
        stock=?,
        status=?
        WHERE id=?
        ");

        $query->execute([
            $name,
            $price,
            $image,
            $description,
            $stock,
            $status,
            $id
        ]);

    }else{

        $query = $pdo->prepare("
        UPDATE products
        SET
        name=?,
        price=?,
        description=?,
        stock=?,
        status=?
        WHERE id=?
        ");

        $query->execute([
            $name,
            $price,
            $description,
            $stock,
            $status,
            $id
        ]);
    }

    header("Location: produk.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>

    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/edit-produk.css">
</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main">

    <div class="form-container">
        <h2>🌱 Edit Produk TumbuTani</h2>
<p style="color:#666;margin-bottom:20px;">
Perbarui informasi produk yang tersedia di marketplace.
</p>
        <h2>✏️ Edit Produk</h2>

        <form method="POST" enctype="multipart/form-data">

            <label>Nama Produk</label>
            <input type="text" name="name"
            value="<?= $produk['name'] ?>" required>

            <label>Harga</label>
            <input type="number" name="price"
            value="<?= $produk['price'] ?>" required>

            <label>Deskripsi</label>
            <textarea name="description"><?= $produk['description'] ?></textarea>

            <label>Stok</label>
            <input type="number" name="stock"
            value="<?= $produk['stock'] ?>" required>

            <label>Status</label>

            <select name="status">

                <option value="Ready"
                <?= $produk['status']=='Ready' ? 'selected' : '' ?>>
                    Ready
                </option>

                <option value="Tidak Ready"
                <?= $produk['status']=='Tidak Ready' ? 'selected' : '' ?>>
                    Tidak Ready
                </option>

            </select>

            <label>Foto Saat Ini</label>

            <div class="preview">
                <img src="../assets/<?= $produk['image'] ?>">
            </div>

            <label>Foto Baru (Opsional)</label>
            <input type="file" name="image">

            <button type="submit" name="update" class="btn-update">
                💾 Update Produk
            </button>

        </form>

    </div>

</div>

</body>
</html>