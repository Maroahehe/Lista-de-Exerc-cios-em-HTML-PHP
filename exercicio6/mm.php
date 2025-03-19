<?php
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    if ($n1 >= $n2 && $n1 >= $n3) {
        echo "O maior número é: $n1";
    } elseif ($n2 >= $n1 && $n2 >= $n3) {
        echo "O maior número é: $n2";
    } else {
        echo "O maior número é: $n3";
    }
    
?>