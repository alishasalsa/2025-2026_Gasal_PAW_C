<?php
	$fruits = array("Avocado", "Blueberry", "Cherry", "Durian", "Mangga", "Jeruk", "Pisang", "Manggis");

	// Hapus 1 data (misalnya 'Cherry')
	unset($fruits[2]);

	// Tampilkan data setelah dihapus
	echo "Setelah menghapus 'Cherry':<br>";
	foreach ($fruits as $index => $fruit) {
	    echo "Indeks [$index] = $fruit<br>";
	}

	// Tampilkan nilai & indeks tertinggi setelah penghapusan
	$last_index_after_delete = array_key_last($fruits);
	echo "<br>Nilai dengan indeks tertinggi: " . $fruits[$last_index_after_delete] . "<br>";
	echo "Indeks tertinggi sekarang: $last_index_after_delete<br>";
?>
