<?php
	$nums = array(5, 2, 8, 1, 9);

	sort($nums); // Urut naik
	echo "sort(): "; print_r($nums);
	echo "<br>";

	rsort($nums); // Urut turun
	echo "rsort(): "; print_r($nums);
	echo "<br>";

	$ages = array("Andy"=>25, "Bianca"=>22, "Charlie"=>28);

	asort($ages); // Berdasarkan nilai (ascending)
	echo "asort(): "; print_r($ages);
	echo "<br>";

	ksort($ages); // Berdasarkan key (ascending)
	echo "ksort(): "; print_r($ages);
	echo "<br";

	arsort($ages); // Berdasarkan nilai (descending)
	echo "arsort(): "; print_r($ages);
	echo "<br>";

	krsort($ages); // Berdasarkan key (descending)
	echo "krsort(): "; print_r($ages);
	echo "<br>";
?>
