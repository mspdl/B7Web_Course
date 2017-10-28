<!DOCTYPE html>
<html>
	<head>
		<title>Class 19 - PDO: Selecting data</title>
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

				$sql = "SELECT * FROM posts WHERE author='hsaudhasu'";
				$sql = $pdo->query($sql);

				if($sql->rowCount() > 0) { // check if the sql is empty

					foreach ($sql->fetchAll() as $post) { // fetchAll get all results of the query and transform it in an array
						echo "<h3>".$post["title"]."</h3>";
						echo "<small><i>".$post["creation_date"]."</i></small> - <b>".$post["author"]."</b><br>";
						echo $post["post_body"]."<br>";
						echo "<br>";
					}
				} else {
					echo "There are no posts to show."."<br>";
				}

			} catch(PODException $e) { // what's variable will recieve the error
				echo "Failed: ".$e->getMessage()."<br>"; // show to user the error message
			}



		?>

	</body>
</html>