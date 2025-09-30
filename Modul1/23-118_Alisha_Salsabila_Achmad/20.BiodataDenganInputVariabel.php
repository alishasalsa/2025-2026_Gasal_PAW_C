<!DOCTYPE html>
<html>
<head>
    <title>Biodata Fleksibel</title>
</head>
<body>
    <h2>Biodata Sederhana</h2>

    <?php
        // Ambil data dari query string, jika tidak ada beri nilai default
        $nama    = isset($_GET['nama']) ? $_GET['nama'] : 'Belum diisi';
        $nim     = isset($_GET['nim']) ? $_GET['nim'] : 'Belum diisi';
        $prodi   = isset($_GET['prodi']) ? $_GET['prodi'] : 'Belum diisi';
        $telepon = isset($_GET['telepon']) ? $_GET['telepon'] : 'Belum diisi';
    ?>

    <table border="1">
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?= htmlspecialchars($nim); ?></td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td><?= htmlspecialchars($prodi); ?></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><?= htmlspecialchars($telepon); ?></td>
        </tr>
    </table>

    <p>Contoh penggunaan query string di URL:</p>
    <p>
        <code>?nama=Alisha+Salsabila+Achmad&nim=230411100118&prodi=Teknik+Informatika&telepon=08123456789</code>
    </p>
</body>
</html>
