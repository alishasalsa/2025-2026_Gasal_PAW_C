<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporan_penjualan.xls");

// Ambil parameter tanggal dari URL
$start = $_GET["start"];
$end   = $_GET["end"];

// ================== KONEKSI DATABASE ==================
$conn = mysqli_connect("localhost", "root", "salsabila2201", "jualBeli");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ================== QUERY DATA ==================
$query = "SELECT * FROM penjualan 
          WHERE tanggal BETWEEN '$start' AND '$end'
          ORDER BY tanggal ASC";

$result = mysqli_query($conn, $query);

// ================== PROSES DATA ==================
$filtered = [];
$totalPendapatan = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $filtered[] = $row;
    $totalPendapatan += $row["pendapatan"];
}

// ================== OUTPUT EXCEL ==================
echo "<h3>Laporan Pendapatan Excel</h3>";
echo "Periode: $start sampai $end<br><br>";

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>No</th><th>Tanggal</th><th>Pendapatan</th></tr>";

$no = 1;
foreach ($filtered as $row) {
    echo "<tr>
            <td>$no</td>
            <td>{$row['tanggal']}</td>
            <td>{$row['pendapatan']}</td>
          </tr>";
    $no++;
}

echo "<tr>
        <th></th>
        <th>Total</th>
        <th>$totalPendapatan</th>
      </tr>";

echo "</table>";

mysqli_close($conn);
?>
