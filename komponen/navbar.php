<nav class="navbar">
    <div class="logo">
        <a href="index.php">🌶️ TumbuTani.<span>Nusantara</span></a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tentangkami.php">Tentang Kami</a></li>
        <li><a href="mitra.php">Mitra</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="produk.php">Produk</a></li>
        
       <?php if(isset($_SESSION['user_id'])): ?>

    <li class="user-info">
        👤 <?= htmlspecialchars($_SESSION['username']); ?>
    </li>

    <li>
        <a href="login/logout.php" class="btn-logout">
            Logout
        </a>
    </li>

<?php else: ?>

    <li>
        <a href="login/login.php" class="btn-login">
            Login
        </a>
    </li>

<?php endif; ?>
    </ul>
    
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>