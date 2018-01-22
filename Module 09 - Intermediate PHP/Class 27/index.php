<!DOCTYPE html>
<html>
	<head>
		<title>Class 27 - BONUS Class: rowCount and database Errors</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<?php

			try {
				$pdo = new PDO("mysql: dbname=blog;host=localhost","root","r00t123");
				$pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // this line is to show the error of database script
			} catch(PDOException $e) {
				echo "Failure: ".$e->getMessage();
			}

			$sql = "SELECT * FROM userss"; // if this line is wrong
			$sql = $pdo->query($sql);

			echo "Total users: ".$sql->rowCount(); // an error can be showed here, if a error can be found in the SQL Script

		?>

	</body>
</html>

