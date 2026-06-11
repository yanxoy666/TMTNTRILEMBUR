<?php
session_start();

// Cek apakah ada pesan error dari proses login
$error_message = "";
if (isset($_SESSION['error'])) {
    $error_message = $_SESSION['error'];
    unset($_SESSION['error']); // Hapus pesan setelah ditampilkan
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CabaiDomba Farm</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .alert-error {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container" style="max-width: 400px; margin-top: 100px;">
        <h2>Login CabaiDomba Farm</h2>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert-error">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form action="proses-login.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required class="form-control">
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label>Password</label>
                <input type="password" name="password" required class="form-control">
            </div>
            <button type="submit" name="login" style="margin-top: 15px;" class="btn-hero">Login</button>
        </form>
        <p style="margin-top: 15px;">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>

</body>
</html>