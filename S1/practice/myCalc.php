<?php

	//$num1 = (int)readline("Numero 1: ");
	//$num2 = (int)readline("Numero 2: ");
	
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	if ($num1 > $num2) {
		echo "$num1 es el mayor que $num2 <br>";
	} elseif ($num1 == $num2) {
		echo "Los número son iguales <br>";
	}
	else {
		echo "$num2 es el mayor que $num1<br>";
	}

	echo ("La suma de los número es igual a: " . $num1 + $num2);

?>