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

<h2>Edit Produk</h2>

<form method="POST" enctype="multipart/form-data">

<p>Nama Produk</p>
<input type="text" name="name"
value="<?= $produk['name'] ?>" required>

<p>Harga</p>
<input type="number" name="price"
value="<?= $produk['price'] ?>" required>

<p>Deskripsi</p>
<textarea name="description"><?= $produk['description'] ?></textarea>

<p>Stok</p>
<input type="number" name="stock"
value="<?= $produk['stock'] ?>" required>

<p>Status</p>

<select name="status">
    <option value="Ready"
    <?= $produk['status']=='Ready'?'selected':'' ?>>
    Ready
    </option>

    <option value="Tidak Ready"
    <?= $produk['status']=='Tidak Ready'?'selected':'' ?>>
    Tidak Ready
    </option>
</select>

<p>Foto Baru (Opsional)</p>
<input type="file" name="image">

<br><br>

<button type="submit" name="update">
Update Produk
</button>

</form>