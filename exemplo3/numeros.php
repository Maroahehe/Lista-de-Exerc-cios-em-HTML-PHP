<html>
<body>
<?php
	$x = $_POST["a"];
	$y = $_POST["b"];
	
	$descontoV ="";
	$vista ="";
	$parcela ="";
	$parcelaD ="";
	$parcela2 ="";
	$parcelaA ="";
    

	if ($y == 1) {

		$descontoV = 0.15 * $x;
		$vista = $x - $descontoV;
		echo "SE pagar à vista = $vista";

	} elseif ($y == 2) {
		$parcela = $x/2;
		$parcelaD = $parcela - ($parcela*0.05);
		echo "SE comprar em 3X = a duas parcelas de $parcelaD";

		} elseif ($y == 3) {
			$parcela2 = $x/3;
			$parcelaA = $parcela2 - ($parcela2*0.05);
			echo "SE comprar em 3X = a tres parcelas de $parcelaA";
	
	} else {
		echo "Digite um valor valido";
	}

?>
</body>
</html>