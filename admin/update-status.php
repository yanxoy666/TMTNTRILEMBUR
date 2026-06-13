<?php
session_start();
include "../config/koneksi.php";

$id = $_POST['id'];
$status = $_POST['status'];

$query = $pdo->prepare("
UPDATE pesanan
SET status = ?
WHERE id = ?
");

$query->execute([
    $status,
    $id
]);

header("Location: pesanan.php");
exit;
?>