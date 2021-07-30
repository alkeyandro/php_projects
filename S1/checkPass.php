<!DOCTYPE html>
<html>
<head>
	<title>
	<?php
		echo "Passwords";
	?>
	</title>
</head>
<body>

<form action="#" method="post">
	<label>Enter the password</label><br>
	<input type="" name="pass1" placeholder="password"/><br>
	<input type="" name="pass2" placeholder="repeat"/><br>
	<input type="submit" name="button" value="Query"/>
</form>

<?php
	
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	function check() {

		global $pass1;
		global $pass2;

		if (strlen($pass1) >= 8) {

			if ($pass1 === $pass2) {

				echo "Success!";

			} else {

				echo "Wrong!";
			}
		} else {
			
			echo "No valid password";

		}
	}

	check();

	echo "<a href='index.php'><h1>Main</h1></a><br>";

?>

</body>
</html>