<?php
    $numbers = array(10, 25, 30, 45, 50, 60);

    $filtered = array_filter($numbers, function($num) {
        return $num > 30;
    });

    print_r($filtered);
?>
