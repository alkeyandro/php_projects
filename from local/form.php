<?php

	echo "<img class='topimg' alt='decorative image' src='images/outline_bolt_white_48dp.png'><br><div class='box'><h1>Formulario</h1><br><form action='#' method='post'><lable>Nombre</lable><br><input type='text' name='name' placeholder='Name'/><br><lable>Edad</lable><br><input type='number' name='age' placeholder='Age'/><br><input/ type='submit' value='submit'/></form></div>";

	function gretting () {

		$name = $_POST['name'];
		$age = $_POST['age'];

		if ($name != '' && $age != '') {
			echo "<p class='output_1'>Hola $name! Tienes $age años.</p>";
		} else {
			echo "<p class='output_X'>Please, enter a valid data.</p>";
		}
	}

	gretting()

?>