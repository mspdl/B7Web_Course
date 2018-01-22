<!DOCTYPE html>
<html>
	<head>
		<title>Class 04 - Functions</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
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