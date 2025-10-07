<?php
// Daftar menu dan harga
$menu = [
    "Sedap Goreng" => 3500,
    "Sedap Soto" => 3200,
    "Indomie" => 3000,
    "Es Teh" => 5000,
    "Jus Jeruk" => 7000
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
</head>
<body>

<h2>Kasir Sederhana</h2>

<p><b>Daftar Menu:</b></p>
<ul>
    <li>Sedap Goreng - Rp 3.500</li>
    <li>Sedap Soto - Rp 3.200</li>
    <li>Indomie - Rp 3.000</li>
    <li>Es Teh - Rp 5.000</li>
    <li>Jus Jeruk - Rp 7.000</li>
</ul>

<form method="post">
    <p>Ketik menu dan jumlah yang dibeli (satu menu per baris):</p>
    <textarea name="pesanan" rows="6" cols="30" placeholder="Contoh:
Nasi Goreng 2
Es Teh 3
Ayam Bakar 1"></textarea><br><br>
    <input type="submit" value="Hitung Total">
</form>

<?php
// Jika tombol submit ditekan
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $input = trim($_POST['pesanan']);
    if ($input == "") {
        echo "<p><b>Silakan isi pesanan terlebih dahulu!</b></p>";
    } else {
        $daftar_pesanan = explode("\n", $input);
        $total = 0;

        echo "<h3>Daftar Pesanan Anda:</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
                <tr>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Subtotal</th>
                </tr>";

        foreach ($daftar_pesanan as $baris) {
            $baris = trim($baris);
            if ($baris == "") continue;

            // Pisahkan nama menu dan jumlah
            $pisah = explode(" ", $baris);
            $jumlah = array_pop($pisah); // ambil angka terakhir
            $nama_menu = implode(" ", $pisah); // sisanya adalah nama menu

            if (isset($menu[$nama_menu]) && is_numeric($jumlah)) {
                $harga = $menu[$nama_menu];
                $subtotal = $harga * $jumlah;
                $total += $subtotal;

                echo "<tr>
                        <td>$nama_menu</td>
                        <td align='center'>$jumlah</td>
                        <td align='right'>Rp " . number_format($harga, 0, ',', '.') . "</td>
                        <td align='right'>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
                    </tr>";
            } else {
                echo "<tr>
                        <td colspan='4'>Menu tidak ditemukan atau format salah: '$baris'</td>
                    </tr>";
            }
        }

        echo "</table>";
        echo "<h3>Total Bayar: Rp " . number_format($total, 0, ',', '.') . "</h3>";
    }
}
?>

</body>
</html>
