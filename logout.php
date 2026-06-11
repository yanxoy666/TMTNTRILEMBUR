<?php
session_start();
session_unset();
session_destroy(); // Menghapus semua session

// Setelah logout, arahkan kembali ke menu login
header("Location: login.php");
exit;
?>