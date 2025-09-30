<!-- Fungsi yang mengembalikan nilai -->
<?php
function sum($x, $y){
	$Z = $x + $y;
	return $Z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>