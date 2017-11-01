<!DOCTYPE html>
<html>
	<head>
		<title>Class 06 - Date and Time Functions #2</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<?php

			$nextDate = date('d/m/Y', strtotime("+17465 days", 0));
			echo $nextDate;

		?>

	</body>
</html> 