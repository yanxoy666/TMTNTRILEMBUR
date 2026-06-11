<nav class="navbar">
    <div class="logo">
        <a href="index.php">🌶️ CabaiDomba<span>Farm</span></a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tentangkami.php">Tentang Kami</a></li>
        <li><a href="mitra.php">Mitra</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="produk.php">Produk</a></li>
        
        <?php if (isset($_SESSION['user_id'])): ?>
            
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <li><a href="admin-dashboard.php" style="color: #2E7D32; font-weight: bold;">Dashboard Admin</a></li>
            <?php endif; ?>
            
            <li>
                <a href="logout.php" class="btn-login" style="background-color: #D84315; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">
                    Logout (<?= htmlspecialchars($_SESSION['username']); ?>)
                </a>
            </li>

        <?php else: ?>
            <li>
                <a href="login.php" class="btn-login" style="background-color: #2E7D32; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;">
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