<?php
session_start();
include "../config/koneksi.php";
include "sidebar.php";

$query = $pdo->query("
SELECT
pesanan.*,
products.name AS nama_produk
FROM pesanan
LEFT JOIN products
ON pesanan.produk_id = products.id
ORDER BY pesanan.id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding:20px;
        }

        h2{
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        th, td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        th{
            background:#2E7D32;
            color:white;
        }

        select{
            padding:5px;
        }

        button{
            padding:5px 10px;
            background:#2E7D32;
            color:white;
            border:none;
            cursor:pointer;
        }

        button:hover{
            background:#1B5E20;
        }

        .back{
            display:inline-block;
            margin-bottom:15px;
        }
    </style>

</head>
<body>

<a href="dashboard.php" class="back">
    ← Kembali ke Dashboard
</a>

<h2>Data Pesanan</h2>

<table>

<tr>
    <th>ID</th>
    <th>Produk</th>
    <th>Pembeli</th>
    <th>No HP</th>
    <th>Jumlah</th>
    <th>Total Harga</th>
    <th>Status</th>
    <th>Tanggal</th>
</tr>

<?php while($row = $query->fetch(PDO::FETCH_ASSOC)): ?>

<tr>

    <td><?= $row['id'] ?></td>

    <td><?= $row['nama_produk'] ?></td>

    <td><?= $row['nama_pembeli'] ?></td>

    <td><?= $row['no_hp'] ?></td>

    <td><?= $row['jumlah'] ?></td>

    <td>
        Rp <?= number_format($row['total_harga'],0,',','.') ?>
    </td>

    <td>

        <form action="update-status.php" method="POST">

            <input
                type="hidden"
                name="id"
                value="<?= $row['id'] ?>"
            >

            <select name="status">

                <option value="Menunggu"
                <?= $row['status']=='Menunggu' ? 'selected' : '' ?>>
                    Menunggu
                </option>

                <option value="Diproses"
                <?= $row['status']=='Diproses' ? 'selected' : '' ?>>
                    Diproses
                </option>

                <option value="Selesai"
                <?= $row['status']=='Selesai' ? 'selected' : '' ?>>
                    Selesai
                </option>

            </select>

            <button type="submit">
                Update
            </button>

        </form>

    </td>

    <td><?= $row['created_at'] ?></td>

</tr>

<?php endwhile; ?>

</table>

</body>
</html>