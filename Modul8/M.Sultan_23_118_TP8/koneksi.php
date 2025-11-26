<?php  
$host = "localhost";
$username = "root";
$password = "salsabila2201";
$db = "login";

$conn = mysqli_connect($host,$username,$password,$db);

if (!$conn){
	die("koneksi gagal: " .mysqli_connect_error());
}
?>