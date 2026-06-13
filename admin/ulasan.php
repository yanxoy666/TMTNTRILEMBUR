<?php
session_start();
include "../config/koneksi.php";
include "sidebar.php";

$data = $pdo->query("
SELECT * FROM ulasan
ORDER BY id DESC
");
?>

<h2>Data Ulasan</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Komentar</th>
    <th>Tanggal</th>
</tr>

<?php while($row = $data->fetch(PDO::FETCH_ASSOC)): ?>

<tr>

<td><?= $row['id'] ?></td>

<td><?= $row['nama'] ?></td>

<td><?= $row['komentar'] ?></td>

<td><?= $row['created_at'] ?></td>

</tr>

<?php endwhile; ?>

</table>