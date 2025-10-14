<?php
    $veggies = array("Carrot", "Spinach", "Broccoli");

    // Hitung panjang array sayur
    $arrlength = count($veggies);

    // Tampilkan seluruh data sayuran
    for ($x = 0; $x < $arrlength; $x++) {
        echo $veggies[$x] . "<br>";
    }
?>
