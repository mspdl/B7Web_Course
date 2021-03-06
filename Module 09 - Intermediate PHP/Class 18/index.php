<!DOCTYPE html>
<html>
	<head>
		<title>Class 18 - PDO: Connecting to a database</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<h3>PDO: PHP Data Objects</h3>
		<small>A PHP library specialist in connect PHP to databases</small>
		<br>
		<br>

		<?php

			$dsn = "mysql:dbname=blog;host=127.0.0.1"; // DSN = Data Source Name, a connection string used to define name,
													   // address, driver, user, and password of a database
													   // database type:which database will be connected;where is the database
			$dbuser = "root";
			$dbpass = "root123";

			try {
				$pdo = new PDO($dsn, $dbuser, $dbpass); // start a class of the PDO, 3 parameters: dsn, user, pass
				echo "Database connected successfully.";
			} catch(PODException $e) { // what's variable will recieve the error
				echo "Failed: ".$e->getMessage(); // show to user the error message
			}

		?>

	</body>
</html> 