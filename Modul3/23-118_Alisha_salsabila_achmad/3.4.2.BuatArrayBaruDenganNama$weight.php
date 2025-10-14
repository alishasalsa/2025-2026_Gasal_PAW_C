<?php
    $weight = array(
        "Andy" => "65",
        "Barry" => "60",
        "Charlie" => "63"
    );

    // Menampilkan seluruh data dengan foreach
    foreach ($weight as $name => $value) {
        echo "Key = " . $name . ", Value = " . $value . " kg";
        echo "<br>";
    }
?>
