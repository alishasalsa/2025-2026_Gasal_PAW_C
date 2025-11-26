<?php
session_start();
require "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($sql);

if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['level']    = $data['level'];
    header("Location: index.php");
} else {
    echo "<script>alert('Username / Password salah!'); window.location='login.php';</script>";
}
?>
