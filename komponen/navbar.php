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
            TumbuTani<span class="dot-nusantara">.Nusantara</span>
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

<style>
/* Custom Premium Navbar Styles */
nav.navbar {
    background-color: #126d45 !important;
    padding: 15px 50px !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
    transition: all 0.3s ease;
}

nav.navbar .logo a {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 24px;
    font-weight: 700;
    color: #ffffff !important;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    letter-spacing: -0.5px;
}

nav.navbar .logo .logo-img {
    height: 42px;
    width: auto;
    object-fit: contain;
    transition: transform 0.3s ease;
}

nav.navbar .logo a:hover .logo-img {
    transform: scale(1.08) rotate(-3deg);
}

nav.navbar .logo .dot-nusantara {
    color: #ffd200 !important;
}

nav.navbar .nav-links {
    align-items: center;
}

nav.navbar .nav-links li {
    padding: 0 5px;
}

nav.navbar .nav-links a {
    color: #ffffff !important;
    font-weight: 600;
    text-decoration: none;
    position: relative;
    padding: 6px 0;
    margin: 0 12px;
    transition: color 0.3s ease;
}

nav.navbar .nav-links a::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 0;
    height: 3px;
    background-color: #ffd200;
    border-radius: 2px;
    transition: width 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

nav.navbar .nav-links a:hover {
    color: #ffd200 !important;
}

nav.navbar .nav-links a:hover::after,
nav.navbar .nav-links a.active::after {
    width: 100%;
}

nav.navbar .nav-links a.active {
    color: #ffd200 !important;
}

/* User Info Styling */
nav.navbar .nav-links .user-info {
    color: #ffffff !important;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
    margin-right: 15px;
    padding: 8px 0;
    font-size: 0.95rem;
}

/* Login/Logout Buttons Styling */
nav.navbar .nav-links a.btn-login {
    background-color: #ffd200 !important;
    color: #126d45 !important;
    padding: 8px 22px !important;
    border-radius: 25px !important;
    font-weight: 700 !important;
    margin-left: 15px !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    border: 2px solid transparent !important;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
}

nav.navbar .nav-links a.btn-logout {
    background-color: #e53935 !important;
    color: #ffffff !important;
    padding: 8px 22px !important;
    border-radius: 25px !important;
    font-weight: 700 !important;
    margin-left: 15px !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    border: 2px solid transparent !important;
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
}

nav.navbar .nav-links a.btn-login::after,
nav.navbar .nav-links a.btn-logout::after {
    display: none !important;
}

nav.navbar .nav-links a.btn-login:hover {
    background-color: #ffffff !important;
    color: #126d45 !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15) !important;
}

nav.navbar .nav-links a.btn-logout:hover {
    background-color: #ffffff !important;
    color: #e53935 !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15) !important;
}

/* Burger Mobile Menu Styles */
nav.navbar .burger {
    display: none;
    cursor: pointer;
}

nav.navbar .burger div {
    width: 25px;
    height: 3px;
    background-color: #ffffff !important;
    margin: 5px;
    transition: all 0.3s ease;
    border-radius: 2px;
}

/* Responsive Mobile Layout */
@media screen and (max-width: 768px) {
    nav.navbar {
        padding: 15px 25px !important;
    }

    nav.navbar .nav-links {
        display: flex !important;
        flex-direction: column !important;
        position: fixed !important;
        right: 0px !important;
        height: calc(100vh - 70px) !important;
        top: 70px !important;
        background-color: #126d45 !important;
        align-items: center !important;
        width: 70% !important;
        transform: translateX(100%) !important;
        transition: transform 0.4s cubic-bezier(0.77, 0.2, 0.05, 1) !important;
        box-shadow: -5px 5px 15px rgba(0, 0, 0, 0.2) !important;
        padding: 40px 0 !important;
        z-index: 999 !important;
    }

    nav.navbar .nav-links.nav-active {
        transform: translateX(0%) !important;
    }

    nav.navbar .nav-links li {
        opacity: 0;
        margin: 15px 0 !important;
        width: 100% !important;
        text-align: center !important;
    }

    nav.navbar .nav-links a {
        display: inline-block !important;
        width: 80% !important;
        font-size: 1.1rem !important;
        margin: 0 !important;
        padding: 10px 0 !important;
    }

    nav.navbar .nav-links a::after {
        bottom: 0px !important;
    }

    nav.navbar .nav-links a.btn-login,
    nav.navbar .nav-links a.btn-logout {
        margin-left: 0 !important;
        margin-top: 15px !important;
        width: 80% !important;
    }

    nav.navbar .burger {
        display: block !important;
    }
}

/* Burger Animation */
nav.navbar .burger.toggle .line1 {
    transform: rotate(-45deg) translate(-5px, 6px);
}

nav.navbar .burger.toggle .line2 {
    opacity: 0;
}

nav.navbar .burger.toggle .line3 {
    transform: rotate(45deg) translate(-5px, -6px);
}

@keyframes navLinkFade {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('nav.navbar .burger');
    const nav = document.querySelector('nav.navbar .nav-links');
    const navLinks = document.querySelectorAll('nav.navbar .nav-links li');

    if (burger && nav) {
        burger.addEventListener('click', () => {
            // Toggle Nav
            nav.classList.toggle('nav-active');

            // Animate Links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.4s ease forwards ${index / 7 + 0.2}s`;
                }
            });

            // Burger Animation
            burger.classList.toggle('toggle');
        });
    }
});
</script>