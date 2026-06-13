<?php
session_start();
include "../config/koneksi.php";

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Produk</title>

    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/produk.css">
</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main">

    <h2>📦 Manajemen Produk</h2>

    <a href="tambah-produk.php" class="btn-tambah">
        + Tambah Produk
    </a>

    <div class="table-container">

        <table>

            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>

            <tr>

                <td><?= $row['id'] ?></td>

                <td>
                    <img src="../assets/<?= $row['image'] ?>" alt="">
                </td>

                <td><?= htmlspecialchars($row['name']) ?></td>

                <td>
                    Rp <?= number_format($row['price'],0,',','.') ?>
                </td>

                <td><?= $row['stock'] ?></td>

                <td>
                    <span class="status">
                        <?= $row['status'] ?>
                    </span>
                </td>

                <td>

                    <a href="edit-produk.php?id=<?= $row['id'] ?>"
                    class="btn-edit">
                        Edit
                    </a>

                    <a href="hapus-produk.php?id=<?= $row['id'] ?>"
                    class="btn-hapus"
                    onclick="return confirm('Hapus produk?')">
                        Hapus
                    </a>

                </td>

            </tr>

            <?php endwhile; ?>

        </table>

    </div>

</div>

</body>
</html>