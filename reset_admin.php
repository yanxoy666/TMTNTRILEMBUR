<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tumbutani_nusantara";

$koneksi = mysqli_connect($host, $user, $pass, $db);

$password_baru = password_hash("admin123", PASSWORD_DEFAULT);

$query = "UPDATE users 
          SET password='$password_baru' 
          WHERE username='admin'";

if(mysqli_query($koneksi, $query)){
    echo "Password admin berhasil direset!";
}else{
    echo "Gagal reset password!";
}
?>