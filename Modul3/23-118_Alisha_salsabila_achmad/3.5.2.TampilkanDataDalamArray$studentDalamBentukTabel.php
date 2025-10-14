<?php
    $students = array(
        array("Alex", "220401", "0812345678"),
        array("Bianca", "220402", "0812345687"),
        array("Candice", "220403", "0812345665"),
        array("Daniel", "220404", "0812345699"),
        array("Evelyn", "220405", "0812345601"),
        array("Felix", "220406", "0812345622"),
        array("Grace", "220407", "0812345633"),
        array("Henry", "220408", "0812345644")
    );

    echo "<table border='1' cellspacing='0' cellpadding='6'>";
    echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

    for ($row = 0; $row < count($students); $row++) {
        echo "<tr>";
        for ($col = 0; $col < 3; $col++) {
            echo "<td>" . $students[$row][$col] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
?>
