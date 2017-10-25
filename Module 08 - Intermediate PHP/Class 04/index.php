<!DOCTYPE html>
<html>
	<head>
		<title>Class 04 - Functions</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<style type="text/css">
			* {
				padding: 5px;
			}
		</style>
	</head>
	<body>

		<?php

			function toSum($x, $y) { // function with parameter
				return $x + $y;
			}

			function showName() { // function without parameter
				return "Morgan";
			}

			echo "Result: ".toSum(3,5)."<br>";
			echo "My name is ".showName();

		?>

	</body>
</html>