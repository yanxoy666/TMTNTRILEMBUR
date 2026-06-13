<?php
session_start();
include "../config/koneksi.php";

if(!isset($_GET['id'])){
    header("Location: produk.php");
    exit;
}

$id = $_GET['id'];

$query = $pdo->prepare(
    "DELETE FROM products WHERE id=?"
);

$query->execute([$id]);

header("Location: produk.php");
exit;
?>