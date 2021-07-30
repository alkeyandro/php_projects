<!DOCTYPE html>
<html>
<head>
	<title>
	<?php
		echo "Positivos";
	?>
	</title>
</head>
<body>

<form action="#" method="post">
	<label>Enter the number</label>
	<input type="" name="num"/>
	<input type="submit" name="button" value="Query"/>
</form>

<?php
	
	$num = $_POST['num'];

	function findNum() {

		global $num;

		if ($num > 0) {
			echo "El número $num es POSITIVO";
		}
		else {
			echo "El número $num es NEGATIVO";
		}
	}

	findNum();

	echo "<a href='index.php'><h1>Main</h1></a><br>";

?>

</body>
</html>