<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Komentar pada PHP</title>
</head>
<body>

<?php
// This is a single-lane comment

#This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* +15 */ + 5;
echo $x;
?>

</body>
</html>