<!DOCTYPE html>
<html>
	<head>
		<title>Class 06 - Date and Time Functions #2</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<style type="text/css">
			* {
				padding: 5px;
			}
		</style>
	</head>
	<body>

		<?php

			$nextDate = date('d/m/Y', strtotime("+17465 days", 0));
			echo $nextDate;

		?>

	</body>
</html>