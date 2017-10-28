<!DOCTYPE html>
<html>
	<head>
		<title>Class 15 - Session/Cookie</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<?php

			session_start(); // start a session, needs to be the first line of the php code

			// $_SESSION["test"] = "Morgan Espindola"; // it's keep saved in the server side

			// echo "Session created";

			echo "My name is ".$_SESSION["test"]."<br>";


			// setcookie("mytest","John Moroe", time()+3600); // identify, value, life time (in seconds)

			// echo "Cookie edited with sucess";

			echo "Cookie defined: ".$_COOKIE["mytest"];

		?>
	</body>
</html>