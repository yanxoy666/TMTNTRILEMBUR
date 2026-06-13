<?php
session_start();
include "../config/koneksi.php";

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mengambil data user berdasarkan username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // --- BAGIAN DEBUGER VAR_DUMP SUDAH DIHAPUS ---

    if($user){

        // Cek password (mendukung password_hash maupun plain text untuk testing)
        if(password_verify($password, $user['password']) || $password === $user['password']){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Arahkan sesuai role
            if(strtolower($user['role']) === 'admin'){
                header("Location: ../admin/dashboard.php");
            } else {
                header("Location: ../index.php");
            }
            exit;

        } else {
            $_SESSION['error'] = "Password salah!";
            header("Location: login.php");
            exit;
        }

    } else {
        $_SESSION['error'] = "Username tidak ditemukan!";
        header("Location: login.php");
        exit;
    }

} else {
    // Jika diakses langsung tanpa tekan tombol login
    header("Location: login.php");
    exit;
}