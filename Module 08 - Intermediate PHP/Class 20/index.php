<!DOCTYPE html>
<html>
	<head>
		<title>Class 20 - PDO: Inserting data</title>
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
				echo "Database connected successfully."."<br>";

				$title = "Test Title";
				$creation_date = "2017-10-25 00:00:00";
				$post_body = "This is a body of a post. Not a good body, but still a body.";
				$author = "John";

				$sql = "INSERT INTO posts (title,creation_date,post_body,author) VALUES ('$title','$creation_date','$post_body','$author')";
				$sql = $pdo->query($sql);

				echo "Post inserted successfully. Post id = ".$pdo->lastInsertId();

			

			} catch(PODException $e) { // what's variable will recieve the error
				echo "Failed: ".$e->getMessage()."<br>"; // show to user the error message
			}



		?>

	</body>
</html> 