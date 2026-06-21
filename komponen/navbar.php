<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar">
    <div class="logo">
    <a href="index.php">
        <img src="assets/foto/logo1.png" alt="TumbuTani Nusantara Logo" class="logo-img">
        <span class="brand-name">
            TumbuTani<span class="dot-nusantara">.Nusantara</span>
        </span>
    </a>
</div>
    <ul class="nav-links">
        <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Beranda</a></li>
        <li><a href="tentangkami.php" class="<?= $current_page == 'tentangkami.php' ? 'active' : '' ?>">Tentang Kami</a></li>
        <li><a href="mitra.php" class="<?= $current_page == 'mitra.php' ? 'active' : '' ?>">Mitra</a></li>
        <li><a href="galeri.php" class="<?= $current_page == 'galeri.php' ? 'active' : '' ?>">Galeri</a></li>
        <li><a href="produk.php" class="<?= $current_page == 'produk.php' ? 'active' : '' ?>">Produk</a></li>
        
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
<div class="nav-overlay"></div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@700;800&display=swap');

/* ==================================================
   PREMIUM GLASSMORPHISM NAVBAR
   ================================================== */
nav.navbar {
    position: sticky;
    top: 0;
    z-index: 9999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 50px;
    background: rgba(18, 109, 69, 0.82);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    transition: background 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
    font-family: 'Plus Jakarta Sans', sans-serif;
}

/* LOGO & BRANDING */
.logo a {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
}

.logo-img {
    height: 52px;
    width: auto;
    transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), filter 0.4s ease;
}

.logo-img:hover {
    transform: scale(1.08) rotate(2deg);
    filter: drop-shadow(0 4px 12px rgba(255, 213, 79, 0.3));
}

.brand-name {
    display: flex;
    align-items: center;
    font-size: 1.6rem;
    font-weight: 800;
    color: #ffffff !important;
    white-space: nowrap;
    letter-spacing: -0.8px;
    font-family: 'Outfit', sans-serif;
}

.brand-name .dot-nusantara {
    color: #FFD54F !important;
    text-shadow: 0 0 10px rgba(255, 213, 79, 0.3);
}

/* NAVIGATION LINKS */
.nav-links {
    display: flex;
    align-items: center;
    gap: 8px;
    list-style: none;
}

.nav-links li {
    padding: 0;
}

.nav-links a {
    color: rgba(255, 255, 255, 0.9) !important;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.98rem;
    padding: 10px 18px;
    border-radius: 12px;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
}

.nav-links a:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #FFD54F !important;
    transform: translateY(-1px);
}

.nav-links a.active {
    background: rgba(255, 213, 79, 0.15);
    color: #FFD54F !important;
    box-shadow: inset 0 0 0 1px rgba(255, 213, 79, 0.2);
}

.nav-links a.active::after {
    content: '';
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 4px;
    border-radius: 99px;
    background: #FFD54F;
    box-shadow: 0 2px 8px rgba(255, 213, 79, 0.6);
}

/* USER PANEL */
.user-info {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #ffffff;
    background: rgba(255, 255, 255, 0.12);
    padding: 10px 18px;
    border-radius: 999px;
    font-weight: 600;
    font-size: 0.95rem;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
}

/* BUTTONS: LOGIN / LOGOUT */
.btn-login {
    background: linear-gradient(135deg, #FFD54F 0%, #FFC107 100%) !important;
    color: #0B5836 !important;
    padding: 10px 24px !important;
    border-radius: 999px !important;
    font-weight: 750 !important;
    box-shadow: 0 6px 20px rgba(255, 213, 79, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.btn-login:hover {
    background: #ffffff !important;
    color: #126d45 !important;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 8px 24px rgba(255, 255, 255, 0.25);
}

.btn-logout {
    background: #EF4444 !important;
    color: #ffffff !important;
    padding: 10px 24px !important;
    border-radius: 999px !important;
    font-weight: 750 !important;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.btn-logout:hover {
    background: #ffffff !important;
    color: #EF4444 !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(239, 68, 68, 0.2);
}

.btn-login::after,
.btn-logout::after {
    display: none !important;
}

/* MOBILE BURGER */
.burger {
    display: none;
    cursor: pointer;
    z-index: 10001;
}

.burger div {
    width: 28px;
    height: 3px;
    background: #ffffff;
    margin: 5px;
    border-radius: 10px;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

/* OVERLAY */
.nav-overlay {
    position: fixed;
    inset: 0;
    background: rgba(11, 88, 54, 0.4);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    opacity: 0;
    visibility: hidden;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 9998;
}

.nav-overlay.active {
    opacity: 1;
    visibility: visible;
}

/* RESPONSIVE (MOBILE DRAWER) */
@media (max-width: 900px) {
    nav.navbar {
        padding: 14px 24px;
    }
    
    .logo-img {
        height: 44px;
    }
    
    .brand-name {
        font-size: 1.35rem;
    }
    
    .burger {
        display: block;
    }
    
    .nav-links {
        position: fixed;
        top: 0;
        right: -100%;
        width: 290px;
        max-width: 80%;
        height: 100vh;
        background: linear-gradient(180deg, #126D45 0%, #0B5836 100%) !important;
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        transition: right 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: -10px 0 40px rgba(0, 0, 0, 0.25) !important;
        z-index: 10000;
        padding: 40px 24px;
    }
    
    .nav-links.nav-active {
        right: 0;
    }
    
    .nav-links li {
        width: 100%;
        text-align: center;
    }
    
    .nav-links a {
        width: 85%;
        display: block;
        margin: auto;
        padding: 14px;
        border-radius: 14px;
    }
    
    .nav-links a.active::after {
        display: none;
    }
    
    .user-info {
        width: 85%;
        justify-content: center;
        margin: auto;
    }
    
    .btn-login,
    .btn-logout {
        width: 85% !important;
        display: block !important;
        text-align: center;
        margin: auto;
    }
}

/* BURGER ANIMATION TRIGGERED BY SCRIPT */
.burger.toggle .line1 {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.burger.toggle .line2 {
    opacity: 0;
    transform: scale(0);
}

.burger.toggle .line3 {
    transform: rotate(45deg) translate(-5px, -6px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const overlay = document.querySelector('.nav-overlay');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        burger.classList.toggle('toggle');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
        nav.classList.remove('nav-active');
        burger.classList.remove('toggle');
        overlay.classList.remove('active');
    });

});
</script>