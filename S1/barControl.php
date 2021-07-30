<!DOCTYPE html>
<html>
<head>
	<title>
	<?php
		echo "Ingreso bar";
	?>
	</title>
</head>
<body>

<form action="#" method="post">
	<label>Enter your name</label>
	<input type="" name="name"/><br>
	<label>Enter your age</label>
	<input type="" name="age"/><br>
	<input type="submit" name="button" value="Query">
</form>

<?php
	
	$nombre = $_POST['name'];
	$edad = $_POST['age'];

	function barControl() {

		global $edad;
		global $nombre;

		if ($edad >= 18) {
			echo "$nombre de $edad años tiene acceso permitido al bar.";
		} else {
			echo "$nombre de $edad años NO tiene acceso.";
		}
	}

	barControl();

	echo "<a href='index.php'><h1>Main</h1></a><br>";
	
?>

</body>
</html>