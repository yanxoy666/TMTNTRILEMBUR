<?php
session_start();
include '../config/koneksi.php';

if(isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}

$error = '';
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // <-- Tambahkan titik koma di sini

    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    
    if($stmt->rowCount() > 0) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
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
        <h2>Admin Login</h2>
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