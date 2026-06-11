<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../login/login.php");
    exit();
}
?>



<?php
session_start();
include '../config/koneksi.php';

// Cek sesi
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Proses Logout
if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// Proses Hapus Data (Delete)
if(isset($_GET['hapus'])) {
    $stmt = $pdo->prepare("DELETE FROM produk WHERE id = ?");
    $stmt->execute([$_GET['hapus']]);
    header("Location: dashboard.php");
    exit;
}

// Proses Tambah / Edit Data (Create & Update)
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto']; // Idealnya ini menggunakan $_FILES untuk upload gambar
    
    if(!empty($_POST['id'])) {
        // Update
        $stmt = $pdo->prepare("UPDATE produk SET nama=?, deskripsi=?, harga=?, foto=? WHERE id=?");
        $stmt->execute([$nama, $deskripsi, $harga, $foto, $_POST['id']]);
    } else {
        // Insert
        $stmt = $pdo->prepare("INSERT INTO produk (nama, deskripsi, harga, foto) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nama, $deskripsi, $harga, $foto]);
    }
    header("Location: dashboard.php");
    exit;
}

// Cek apakah mode Edit
$editData = null;
if(isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM produk WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $editData = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .wrapper { max-width: 1000px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 2px solid #2E7D32; padding-bottom: 10px; }
        .header h1 { margin: 0; color: #2E7D32; }
        .btn { padding: 8px 15px; color: white; background: #2E7D32; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        .btn-danger { background: #D84315; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background: #2E7D32; color: white; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input, .form-group textarea { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>Panel Produk - CabaiDomba</h1>
            <div>
                <a href="../index.php" target="_blank" class="btn">Lihat Web</a>
                <a href="?logout=1" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <h3 style="color: #333;"><?= $editData ? 'Edit Produk' : 'Tambah Produk Baru' ?></h3>
        <form method="POST" style="background: #f9f9f9; padding: 15px; border-radius: 5px;">
            <input type="hidden" name="id" value="<?= $editData['id'] ?? '' ?>">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama" required value="<?= htmlspecialchars($editData['nama'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" placeholder="Contoh: Rp 50.000 / pack" required value="<?= htmlspecialchars($editData['harga'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label>Nama File Foto (beserta ekstensi, ex: cabai.jpg)</label>
                <input type="text" name="foto" required value="<?= htmlspecialchars($editData['foto'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="3" required><?= htmlspecialchars($editData['deskripsi'] ?? '') ?></textarea>
            </div>
            <button type="submit" name="simpan" class="btn"><?= $editData ? 'Update Data' : 'Simpan Data' ?></button>
            <?php if($editData): ?>
                <a href="dashboard.php" class="btn btn-danger">Batal Edit</a>
            <?php endif; ?>
        </form>

        <table>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            $stmt = $pdo->query("SELECT * FROM produk ORDER BY id DESC");
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['foto']) ?></td>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= htmlspecialchars($row['harga']) ?></td>
                <td>
                    <a href="?edit=<?= $row['id'] ?>" class="btn" style="background: #ff9800;">Edit</a>
                    <a href="?hapus=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>