<?php
session_start();
include "../config/koneksi.php";

$data = $pdo->query("
SELECT * FROM ulasan
ORDER BY id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Ulasan</title>

    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/ulasan.css">
</head>

<body>

<?php include "sidebar.php"; ?>

<div class="main">

    <h2>⭐ Data Ulasan Pelanggan</h2>

    <div class="table-container">

        <table>

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Komentar</th>
                <th>Tanggal</th>
            </tr>

            <?php while($row = $data->fetch(PDO::FETCH_ASSOC)): ?>

            <tr>

                <td><?= $row['id'] ?></td>

                <td><?= htmlspecialchars($row['nama']) ?></td>

                <td><?= htmlspecialchars($row['komentar']) ?></td>

                <td><?= $row['created_at'] ?></td>

            </tr>

            <?php endwhile; ?>

        </table>

    </div>

</div>

</body>
</html>