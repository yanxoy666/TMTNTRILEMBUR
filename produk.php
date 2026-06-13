<?php
include 'config/koneksi.php';
session_start();
?>

<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - CabaiDomba Farm</title>
    <link rel="stylesheet" href="css/produk.css">
</head>
<body class="page-transition">

<?php include 'komponen/navbar.php'; ?>

<div class="container">
    <h2 class="section-title animate-on-scroll">
        Produk Unggulan Kami
    </h2>

```
<div class="grid-cards">

    <?php
    try {

        $stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $foto = !empty($row['image'])
                ? "assets/" . $row['image']
                : "https://via.placeholder.com/300x200?text=Foto+Produk";
    ?>

    <div class="card animate-on-scroll">

        <img src="<?= htmlspecialchars($foto) ?>"
             alt="<?= htmlspecialchars($row['name']) ?>">

        <div class="card-body">

            <h3 class="card-title">
                <?= htmlspecialchars($row['name']) ?>
            </h3>

            <p class="card-price">
                Rp <?= number_format($row['price'],0,',','.') ?>
            </p>

            <p>
                <?= htmlspecialchars($row['description']) ?>
            </p>

            <p>
                <strong>Stok :</strong>
                <?= $row['stock'] ?>
            </p>

            <p>
                <strong>Status :</strong>
                <?= $row['status'] ?>
            </p>

            <?php if($row['status'] == 'Ready' && $row['stock'] > 0){ ?>

                <a href="pesan.php?id=<?= $row['id'] ?>"
                   class="btn-login"
                   style="display:inline-block;margin-top:15px;font-size:14px;">
                    Beli Sekarang
                </a>

            <?php } else { ?>

                <button disabled
                    style="padding:10px 20px;background:#ccc;border:none;border-radius:5px;">
                    Stok Habis
                </button>

            <?php } ?>

        </div>

    </div>

    <?php
        }
    } catch (Exception $e) {
        echo "<p style='text-align:center;color:red;'>".$e->getMessage()."</p>";
    }
    ?>

</div>
```

</div>

<?php include 'komponen/footer.php'; ?>

<script src="js/main.js"></script>

</body>
</html>
