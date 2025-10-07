<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$nilai = $_POST["nilai"] ;

	echo "Nilai: $nilai<br>";
	if ($nilai <= 50) {
	echo "Grade: E";
	} elseif ($nilai <= 65) {
		echo "Grade: C";
	} else if ($nilai <= 75) {
		echo "Grade: B";
	} else {
		echo "Grade: A";
	}
} else {
	echo '
	<form method="post">
        Masukkan nilai: <input type="number" name="nilai" required>
        <input type="submit" value="Cek Grade">
    </form>
    ';

}

?>