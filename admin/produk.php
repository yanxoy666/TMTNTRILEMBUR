<?php
session_start();
include "../config/koneksi.php";
include "sidebar.php";

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
?>

<h2>Manajemen Produk</h2>

<a href="tambah-produk.php">+ Tambah Produk</a>

<table border="1" cellpadding="10">
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
        <img src="../assets/<?= $row['image'] ?>"
        width="80">
    </td>

    <td><?= $row['name'] ?></td>

    <td>
        Rp <?= number_format($row['price']) ?>
    </td>

    <td><?= $row['stock'] ?></td>

    <td><?= $row['status'] ?></td>

    <td>
        <a href="edit-produk.php?id=<?= $row['id'] ?>">
            Edit
        </a>

        |

        <a href="hapus-produk.php?id=<?= $row['id'] ?>"
        onclick="return confirm('Hapus produk?')">
            Hapus
        </a>
    </td>

</tr>

<?php endwhile; ?>

</table>