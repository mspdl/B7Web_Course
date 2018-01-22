<!DOCTYPE html>
<html>
	<head>
		<title>Class 07 - Math Functions</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
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

			$x = $list[rand(0, count($list)-1)];

			echo $x;
		
		?>

	</body>
</html> 