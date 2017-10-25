<!DOCTYPE html>
<html>
	<head>
		<title>Class 01 - WHILE</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<style type="text/css">
			* {
				padding: 5px;
			}
		</style>
	</head>
	<body>

		<?php 

			$x = 0;

			while ($x < 10) {
				echo ($x+1)."<br>";
				$x++;
			}

		?>

	</body>
</html>