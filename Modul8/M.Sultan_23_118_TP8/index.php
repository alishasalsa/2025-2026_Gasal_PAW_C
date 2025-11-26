<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$level = $_SESSION['level'];
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penjualan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">Sistem Penjualan</div>

    <ul class="menu">
        <li><a href="#">Home</a></li>

        <?php if ($level == 1): ?>
            <li><a href="#">Data Master</a></li>
        <?php endif; ?>

        <li><a href="#">Transaksi</a></li>
        <li><a href="#">Laporan</a></li>
    </ul>

    <div class="user-info">
        <?= $username ?> | <a href="logout.php">Logout</a>
    </div>
</div>

<div class="content">
    <h2>Selamat datang, <?= $username ?></h2>
    <p>Level Anda: <?= $level ?></p>
</div>

</body>
</html>
