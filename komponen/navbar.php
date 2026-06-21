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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

/* =========================
   PREMIUM MODERN NAVBAR
========================= */

nav.navbar{
    position:sticky;
    top:0;
    z-index:9999;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:16px 50px;

    background:rgba(18,109,69,0.96);
    backdrop-filter:blur(12px);

    box-shadow:0 6px 25px rgba(0,0,0,.08);

    transition:.3s ease;
}

/* LOGO */

.logo a{
    display:flex;
    align-items:center;
    gap:12px;
    text-decoration:none;
}

.logo-img{
    height:52px;
    width:auto;
    transition:.3s ease;
}

.logo-img:hover{
    transform:scale(1.08);
}

.brand-name{
    display:flex;
    align-items:center;
    font-size:1.6rem;
    font-weight:800;

    color:#ffffff !important;

    white-space:nowrap;
    letter-spacing:-0.5px;
}

.brand-name .dot-nusantara{
    color:#FFD54F !important;
}

/* MENU */

.nav-links{
    display:flex;
    align-items:center;
    gap:8px;
    list-style:none;
}

.nav-links li{
    padding:0;
}

.nav-links a{
    color:#fff !important;
    text-decoration:none;
    font-weight:600;

    padding:10px 16px;
    border-radius:12px;

    transition:.3s ease;
    position:relative;
}

.nav-links a:hover{
    background:rgba(255,255,255,.10);
    color:#FFD54F !important;
}

.nav-links a.active{
    background:rgba(255,213,79,.15);
    color:#FFD54F !important;
}

.nav-links a.active::after{
    content:'';

    position:absolute;
    bottom:-6px;
    left:50%;

    transform:translateX(-50%);

    width:18px;
    height:4px;

    border-radius:99px;

    background:#FFD54F;
}

/* USER */

.user-info{
    display:flex;
    align-items:center;

    color:#fff;

    background:rgba(255,255,255,.1);

    padding:10px 16px;

    border-radius:999px;

    font-weight:600;
}

/* LOGIN */

.btn-login{
    background:#FFD54F !important;
    color:#126d45 !important;

    padding:10px 22px !important;

    border-radius:999px !important;

    font-weight:700 !important;

    box-shadow:0 6px 20px rgba(255,213,79,.25);
}

.btn-login:hover{
    background:#fff !important;
    transform:translateY(-2px);
}

/* LOGOUT */

.btn-logout{
    background:#ef4444 !important;
    color:#fff !important;

    padding:10px 22px !important;

    border-radius:999px !important;

    font-weight:700 !important;
}

.btn-logout:hover{
    background:#fff !important;
    color:#ef4444 !important;
    transform:translateY(-2px);
}

.btn-login::after,
.btn-logout::after{
    display:none !important;
}

/* BURGER */

.burger{
    display:none;
    cursor:pointer;
    z-index:10001;
}

.burger div{
    width:28px;
    height:3px;
    background:#fff;
    margin:5px;
    border-radius:10px;
    transition:.3s;
}

/* OVERLAY */

.nav-overlay{
    position:fixed;
    inset:0;

    background:rgba(0,0,0,.45);

    opacity:0;
    visibility:hidden;

    transition:.3s;

    z-index:9998;
}

.nav-overlay.active{
    opacity:1;
    visibility:visible;
}

/* MOBILE */

@media(max-width:900px){

    nav.navbar{
        padding:14px 20px;
    }

    .logo-img{
        height:42px;
    }

    .brand-name{
        font-size:1.2rem;
    }

    .burger{
        display:block;
    }

    .nav-links{
        position:fixed;

        top:0;
        right:-100%;

        width:280px;
        max-width:80%;

        height:100vh;

        background:linear-gradient(
            180deg,
            #126d45,
            #0b5836
        );

        flex-direction:column;

        justify-content:center;
        align-items:center;

        gap:18px;

        transition:.4s ease;

        box-shadow:-10px 0 30px rgba(0,0,0,.2);

        z-index:10000;
    }

    .nav-links.nav-active{
        right:0;
    }

    .nav-links li{
        width:100%;
        text-align:center;
    }

    .nav-links a{
        width:85%;
        display:block;
        margin:auto;
        padding:14px;
    }

    .user-info{
        width:85%;
        justify-content:center;
        margin:auto;
    }

    .btn-login,
    .btn-logout{
        width:85%;
        display:block;
        text-align:center;
        margin:auto;
    }
}

/* BURGER ANIMATION */

.burger.toggle .line1{
    transform:rotate(-45deg) translate(-5px,6px);
}

.burger.toggle .line2{
    opacity:0;
}

.burger.toggle .line3{
    transform:rotate(45deg) translate(-5px,-6px);
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