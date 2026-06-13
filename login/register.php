<?php
session_start();
include "../config/koneksi.php";
if(isset($_SESSION['user_id'])) {
    // Jika sudah login, cek rolenya untuk redirect ke tempat yang benar
    if($_SESSION['role'] === 'admin') {
        header("Location: admin-dashboard.php");
    } else {
        header("Location: index.php");
    }
    exit;
}

$error = '';
$success = '';

if(isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $fullname = trim($_POST['fullname']);
    $phone    = trim($_POST['phone']);

    // 1. Validasi apakah Username atau Email sudah terdaftar
    $cekUser = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $cekUser->execute([$username, $email]);
    
    if($cekUser->rowCount() > 0) {
        $error = "Username atau Email sudah digunakan oleh orang lain!";
    } else {
        // AMAN: Enkripsi password sebelum masuk database
        $password_aman = password_hash($password, PASSWORD_DEFAULT);

        // 2. Masukkan data dengan password yang sudah di-hash
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, fullname, phone, role) VALUES (?, ?, ?, ?, ?, 'user')");
        
        if($stmt->execute([$username, $email, $password_aman, $fullname, $phone])) {
            $success = "Pendaftaran akun berhasil! Silakan menuju halaman login.";
        } else {
            $error = "Gagal mendaftar, terjadi kesalahan pada sistem database.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - TumbuTani Nusantara</title>
    <style>
        body { font-family: 'Poppins', sans-serif; background: #FAFAFA; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; padding: 20px 0; }
        .register-box { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 400px; text-align: center; }
        .register-box h2 { color: #2E7D32; margin-bottom: 20px; margin-top: 0; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #2E7D32; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; margin-top: 10px; font-size: 16px; }
        button:hover { background: #D84315; }
        .error { background: #FFEBEE; color: #C62828; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; text-align: left; border-left: 4px solid #Hex C62828; }
        .success { background: #E8F5E9; color: #2E7D32; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; text-align: left; border-left: 4px solid #2E7D32; }
        .login-link { display: block; margin-top: 15px; color: #666; text-decoration: none; font-size: 14px; }
        .login-link a { color: #2E7D32; font-weight: bold; text-decoration: none; }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>Daftar Akun</h2>
        
        <?php if($error): ?><div class="error"><?= $error ?></div><?php endif; ?>
        <?php if($success): ?><div class="success"><?= $success ?></div><?php endif; ?>
        
        <form method="POST">
            <input type="text" name="fullname" placeholder="Nama Lengkap Anda" required>
            <input type="text" name="username" placeholder="Buat Username" required>
            <input type="email" name="email" placeholder="Alamat Email" required>
            <input type="text" name="phone" placeholder="Nomor Telepon / WA" required>
            <input type="password" name="password" placeholder="Buat Password" required>
            
            <button type="submit" name="register">Daftar Sekarang</button>
        </form>
        
        <p class="login-link">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>