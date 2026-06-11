<?php
session_start();

// 1. Koneksi ke Database (Gunakan MySQLi sesuai kodingan awalmu)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tumbutani_nusantara";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];

    // Cari username di database
    $query  = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    // VERIFIKASI 1: Cek apakah akun terdaftar
    if (mysqli_num_rows($result) === 0) {
        $_SESSION['error'] = "Gagal login. Username tidak ditemukan atau belum membuat akun!";
        header("Location: login.php");
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
        
        // VERIFIKASI 2: Cek password (sudah sinkron dengan password_hash)
        if (password_verify($password, $row['password'])) {
            
            // Login Berhasil! Simpan data ke Session
            $_SESSION['user_id']  = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']     = $row['role']; // Simpan role (admin / user)

            // ALUR REDIRECT: Cek role akun yang login
            if ($row['role'] === 'admin') {
                // Jika admin, arahkan ke dashboard admin
                header("Location: admin/dashboard.php"); 
            } else {
                // Jika user biasa, arahkan ke halaman utama/home
                header("Location: index.php"); 
            }
            exit();

        } else {
            $_SESSION['error'] = "Password yang Anda masukkan salah!";
            header("Location: login.php");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>