<html>
<body>

<?php


	$x = $_POST["A"];
	$y = $_POST["B"];
	$z = $_POST["C"];

	$soma = $x + $y + $z;
	$media = $soma /3;
	echo "A media de $x, $y e $z é $media";
?>
</body>
</html>