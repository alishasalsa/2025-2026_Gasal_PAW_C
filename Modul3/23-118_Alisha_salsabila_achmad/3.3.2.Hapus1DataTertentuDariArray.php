<?php
    $height = array(
        "Andy" => "176",
        "Bany" => "165",
        "Charlie" => "170",
        "Nattan" => "180",
        "Rika" => "172",
        "Winda" => "168",
        "Galang" => "174",
        "Ardian" => "177"
    );

    // Hapus 1 data (misalnya "Charlie")
    unset($height["Charlie"]);

    // Tampilkan array setelah penghapusan
    echo "Setelah menghapus 'Charlie':<br>";
    foreach ($height as $name => $value) {
        echo "$name = $value cm<br>";
    }

    // Tampilkan nilai dengan indeks terakhir setelah dihapus
    $last_key = array_key_last($height);
    echo "<br>Indeks terakhir sekarang: $last_key<br>";
    echo "Nilai pada indeks terakhir: " . $height[$last_key] . " cm";
?>
