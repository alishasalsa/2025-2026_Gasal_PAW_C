<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .chart-container {
            display: flex;
            align-items: flex-end;
            height: 250px;
            border-left: 1px solid #aaa;
            border-bottom: 1px solid #aaa;
            padding: 10px;
            gap: 20px;
            margin-bottom: 30px;
        }
        .bar {
            width: 40px;
            background: #7699d4;
            text-align: center;
            color: #000;
            border-radius: 5px 5px 0 0;
        }
        .bar-label {
            margin-top: 5px;
            text-align: center;
        }
        .box-total {
            background: #f7f7f7;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>

<body class="p-4">

<h4><b>Laporan Penjualan</b></h4>

<!-- ==================== FILTER ===================== -->
<form action="" method="GET" class="row g-2 mb-4">
    <div class="col-md-3">
        <input type="date" name="start" class="form-control" required>
    </div>
    <div class="col-md-3">
        <input type="date" name="end" class="form-control" required>
    </div>
    <div class="col-md-3">
        <button class="btn btn-success w-100">Tampilkan</button>
    </div>
</form>

<?php
// ================== KONEKSI DATABASE ==================
$conn = mysqli_connect("localhost", "root", "salsabila2201", "jualBeli");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ================== AMBIL DATA ==================
if (isset($_GET["start"])) {
    $start = $_GET["start"];
    $end   = $_GET["end"];

    $query = "SELECT * FROM penjualan WHERE tanggal BETWEEN '$start' AND '$end' ORDER BY tanggal ASC";
} else {
    $start = "";
    $end = "";
    $query = "SELECT * FROM penjualan ORDER BY tanggal ASC";
}

$result = mysqli_query($conn, $query);

$filtered = [];
while ($row = mysqli_fetch_assoc($result)) {
    $filtered[] = $row;
}

// Hitung total pendapatan, total pelanggan, dan grafik maksimum
$totalPendapatan = 0;
$totalPelanggan  = 0;
$maxValue = 0;

foreach ($filtered as $row) {
    $totalPendapatan += $row["pendapatan"];
    $totalPelanggan  += $row["pelanggan"];

    if ($row["pendapatan"] > $maxValue) {
        $maxValue = $row["pendapatan"];
    }
}
?>

<!-- ==================== TOMBOL ===================== -->
<div class="mb-4">
    <a href="javascript:window.print()" class="btn btn-primary">Print</a>
    <a href="export_excel.php?start=<?= $start ?>&end=<?= $end ?>" class="btn btn-warning">Export Excel</a>
</div>

<!-- ==================== GRAFIK TANPA JS ===================== -->
<h5><b>Grafik Pendapatan</b></h5>

<div class="chart-container">
    <?php foreach ($filtered as $row): 
        $height = $maxValue > 0 ? ($row["pendapatan"] / $maxValue) * 200 : 0;
    ?>
        <div>
            <div class="bar" style="height: <?= $height ?>px;">
                <?= number_format($row["pendapatan"]/1000) ?>k
            </div>
            <div class="bar-label"><?= $row["tanggal"] ?></div>
        </div>
    <?php endforeach; ?>
</div>

<!-- ==================== REKAP TABEL ===================== -->
<h5><b>Rekap Data</b></h5>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Pendapatan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($filtered as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row["tanggal"] ?></td>
            <td><?= $row["pelanggan"] ?></td>
            <td>Rp <?= number_format($row["pendapatan"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- ==================== TOTAL ===================== -->
<div class="row">
    <div class="col-md-4">
        <div class="box-total">
            <h6>Total Pendapatan</h6>
            <b>Rp <?= number_format($totalPendapatan) ?></b>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box-total">
            <h6>Total Pelanggan</h6>
            <b><?= $totalPelanggan ?> Orang</b>
        </div>
    </div>
</div>

</body>
</html>
