<?php
    $height = array(
        "Andy" => "176",
        "Barry" => "165",
        "Charlie" => "170"
    );

    // Tambahkan 5 data baru
    $height["Nattan"] = "180";
    $height["Rika"] = "172";
    $height["Winda"] = "168";
    $height["Galang"] = "174";
    $height["Ardian"] = "177";

    // Menampilkan seluruh data dengan foreach
    foreach ($height as $x => $x_value) {
        echo "Key = " . $x . ", Value = " . $x_value . " cm";
        echo "<br>";
    }
?>
