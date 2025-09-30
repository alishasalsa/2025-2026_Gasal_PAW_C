<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata Sederhana</h2>

    <?php
        // Data biodata
        $nama = "Alisha salsabila Achmad";
        $nim = 230411100118;
        $prodi = "Teknik Informatika";
        $telepon = "08123456789";
    ?>

    <table border="1">
        <tr>
            <th>Nama</th>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?= $nim; ?></td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td><?= $prodi; ?></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><?= $telepon; ?></td>
        </tr>
    </table>
</body>
</html>
