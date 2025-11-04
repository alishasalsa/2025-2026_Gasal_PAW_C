<?php
$servername = "localhost";
$username = "root";
$password = "salsabila2201"; 
$dbname = "penjualan_tpp5"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// echo "Koneksi berhasil! <br><br>";

?>
