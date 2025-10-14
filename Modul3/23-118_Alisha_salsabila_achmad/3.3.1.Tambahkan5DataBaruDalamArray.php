<?php
    $height = array(
        "Andy" => "176",
        "Bany" => "165",
        "Charlie" => "170"
    );

    // Tambahkan 5 data baru
    $height["Nattan"] = "180";
    $height["Rika"] = "172";
    $height["Winda"] = "168";
    $height["Galang"] = "174";
    $height["Ardian"] = "177";

    // Tampilkan seluruh data tinggi
    echo "Daftar tinggi badan:<br>";
    foreach ($height as $name => $value) {
        echo "$name = $value cm<br>";
    }

    // Tampilkan nilai dengan indeks terakhir
    $last_key = array_key_last($height);
    echo "<br>Indeks terakhir: $last_key<br>";
    echo "Nilai pada indeks terakhir: " . $height[$last_key] . " cm";
?>
