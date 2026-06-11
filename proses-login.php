```php
<?php
session_start();

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

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        // Cek password hash ATAU password biasa
        if (
            password_verify($password, $row['password']) ||
            $password === $row['password']
        ) {

            $_SESSION['user_id']  = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role']     = $row['role'];

            if ($row['role'] === 'admin') {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit();

        } else {

            $_SESSION['error'] = "Password yang Anda masukkan salah!";
            header("Location: login.php");
            exit();
        }

    } else {

        $_SESSION['error'] = "Username tidak ditemukan!";
        header("Location: login.php");
        exit();
    }

} else {

    header("Location: login.php");
    exit();
}
?>