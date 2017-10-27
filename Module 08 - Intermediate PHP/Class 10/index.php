<!DOCTYPE html>
<html>
	<head>
		<title>Class 10 - Cryptography Introduction</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<?php

			$name = "Morgan";
			
			echo "Original string: <b>".$name."</b><br>";
			echo "String <b>".$name."</b> using <i>md5</i>: <b>".md5($name)."</b><br>";
			echo "<small>the md5 is not reversible</small><br><br>";

			$name2 = base64_encode($name);
			echo "Original string: <b>".$name."</b><br>";
			echo "String <b>".$name."</b> using <i>base64_encode</i>: <b>".$name2."</b><br>";
			echo "<small>the base64 is reversible</small><br>";
			echo "String <b>".$name2."</b> using <i>base64_decod</i>: <b>".base64_decode($name2)."</b><br><br>";

		
		?>

	</body>
</html>