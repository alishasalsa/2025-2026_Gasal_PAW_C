<?php
    $fruits = array("Avocado", "Blueberry", "Cherry");

    // Menambahkan 5 data baru
    $fruits[] = "Durian";
    $fruits[] = "Mangga";
    $fruits[] = "Jeruk";
    $fruits[] = "Pisang";
    $fruits[] = "Manggis";

    // Menampilkan data buah
    echo "Daftar buah saat ini:<br>";
    foreach ($fruits as $index => $fruit) {
        echo "Indeks [$index] = $fruit<br>";
    }

    // Menampilkan nilai dengan indeks tertinggi
    $last_index = array_key_last($fruits);
    echo "<br>Nilai dengan indeks tertinggi adalah: " . $fruits[$last_index] . "<br>";
    echo "Indeks tertinggi saat ini: $last_index<br><br>";
?>
