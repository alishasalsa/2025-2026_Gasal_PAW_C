<?php
    $fruits = array("Avocado", "Blueberry", "Cherry");

    // Menambahkan 5 data baru menggunakan perulangan FOR
    for ($i = 0; $i < 5; $i++) {
        $fruits[] = "Fruit_" . ($i + 1);
    }

    // Hitung panjang array
    $arrlength = count($fruits);

    // Tampilkan seluruh data buah
    for ($x = 0; $x < $arrlength; $x++) {
        echo $fruits[$x] . "<br>";
    }

    // Tampilkan panjang array
    echo "<br>Panjang array \$fruits saat ini adalah: " . $arrlength;
?>
