<html>
<body>

<?php


	$comprimento = $_POST["A"];
	$largura = $_POST["B"];
	$altura = $_POST["C"];

	$volume = $comprimento * $largura * $altura;
	echo "O volume do retangulo é $volume";
?>
</body>
</html>