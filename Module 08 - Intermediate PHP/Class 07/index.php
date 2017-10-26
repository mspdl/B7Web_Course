<!DOCTYPE html>
<html>
	<head>
		<title>Class 07 - Math Functions</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<style type="text/css">
			* {
				padding: 5px;
			}
		</style>
	</head>
	<body>

		<?php

			echo abs(-4.2)."<br>"; // abs = return the absolute value of a number
			echo round(-4.2)."<br>"; // round = return the round (0~4 to down, 5~9 to up) value of a real number
			echo round(1.5)."<br>"; // round = return the round (0~4 to down, 5~9 to up) value of a real number
			echo round(87.7)."<br>"; // round = return the round (0~4 to down, 5~9 to up) value of a real number
			echo ceil(1.1)."<br>"; // ceil = return the next  value of a real number
			echo floor(1.9)."<br>"; // floor = return the integer value of a real number
			echo rand(1,5)."<br>"; // rand = return a random number between two parameters

			// lottery sample

			$list = array("Morgan","Carlos","André","Juan","Nino","Kátia");

			echo $list[rand(0, count($list))];
		
		?>

	</body>
</html>