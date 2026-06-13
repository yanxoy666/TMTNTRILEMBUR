    <?php
    session_start();

    $error_message = "";
    if (isset($_SESSION['error'])) {
        $error_message = $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TumbuTani</title>

    <link rel="stylesheet" href="css/login.css">
    </head>

    <body>

    <!-- BACKGROUND ANIMATION -->
    <div class="bg-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="login-box">

        <div class="logo">🌱 TumbuTani</div>
        <h2>Login Admin</h2>
        <p class="subtitle">Masuk ke dashboard sistem</p>

        <?php if (!empty($error_message)): ?>
            <div class="alert"><?= $error_message; ?></div>
        <?php endif; ?>

        <form action="proses-login.php" method="POST" onsubmit="showLoader()">

            <div class="input-box">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Masukkan username">
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Masukkan password">
            </div>

            <button type="submit" name="login"class="btn-login">
                Login
            </button>

        </form>

        <p class="footer-text">
            Belum punya akun? <a href="register.php">Daftar</a>
        </p>

    </div>

    <!-- LOADING OVERLAY -->
    <div id="loader">
        <div class="spinner"></div>
        <p>Memproses login...</p>
    </div>

    <script>
    function showLoader(){
        document.getElementById("loader").style.display = "flex";
    }
    </script>

    </body>
    </html>