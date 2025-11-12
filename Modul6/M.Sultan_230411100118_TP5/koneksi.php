<?php
$servername = "localhost";
$username = "root";
$password = "salsabila2201";
$dbname = "tp6";


try {
    $pdo = new PDO("mysql:host=localhost;dbname=tp6;charset=utf8", "root", "salsabila2201");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
