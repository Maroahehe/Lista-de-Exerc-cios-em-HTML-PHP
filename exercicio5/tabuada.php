<?php
	$x = $_POST["n"];
    

    for ($i = 1; $i <= 10 ; $i++) {
        $resultado = $x * $i;
        echo "$x x $i = $resultado <br>";
    }
?>