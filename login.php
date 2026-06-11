<?php
session_start();
include '../config/koneksi.php';

// Jika sudah login sebelumnya, langsung lempar sesuai hak aksesnya
if(isset($_SESSION['user_id'])) {
    if($_SESSION['role'] === 'admin') {
        header("Location: dashboard.php");
    } else {
        header("Location: ../index.php"); // Atau halaman katalog user
    }
    exit;
}

$error = '';
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // Mencari di tabel 'users' berdasarkan username yang diinput
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Memeriksa apakah user ditemukan
    if($user) {
        // NOTE: Idealnya menggunakan password_verify jika di-hash. 
        // Jika masih teks biasa untuk sementara, gunakan: if($password === $user['password'])
        if($password === $user['password']) {
            
            // Simpan data penting ke dalam Session
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['username']  = $user['username'];
            $_SESSION['fullname']  = $user['fullname'];
            $_SESSION['role']      = $user['role']; // Menyimpan 'admin' atau 'user'
            
            // Deteksi Role untuk pengalihan halaman
            if($user['role'] === 'admin') {
                header("Location: dashboard.php"); // Sesuai perintah Anda, masuk ke dashboard admin
            } else {
                header("Location: ../index.php");  // User biasa diarahkan ke landing page / katalog belanja
            }
            exit;
            
        } else {
            $error = "Username atau password salah!";
        }
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - TumbuTani Nusantara</title>
    <style>
        body { font-family: 'Poppins', sans-serif; background: #FAFAFA; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 400px; text-align: center; }
        .login-box h2 { color: #2E7D32; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #2E7D32; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        button:hover { background: #D84315; }
        .error { color: red; margin-bottom: 10px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>TumbuTani Login</h2>
        <?php if($error): ?><div class="error"><?= $error ?></div><?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Masuk</button>
        </form>
        <a href="../index.php" style="display:block; margin-top:15px; color:#666; text-decoration:none; font-size:14px;">&larr; Kembali ke Web</a>
    </div>
</body>
</html>