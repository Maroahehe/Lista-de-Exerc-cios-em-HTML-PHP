<html>
<body>

<?php


	$x = $_POST["A"];
	$y = $_POST["B"];
	$z = $_POST["C"];
    
    $n1 = $x * 2;
    $n2 = $y * 3;
    $n3 = $z * 5;

	$soma = $n1 + $n2 + $n3;
	$media = $soma /3;
	echo "A media de $x, $y e $z é $media";
?>
</body>
</html>