<?php
require "database.php";
$database = new Database("localhost","blog","root","root123");

$database->query("SELECT * FROM posts");
$number = $database->getNumRows();

echo "Posts quantity: ".$number;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 22 - CRUD: Query Method</title>
	</head>
	<body>

	</body>
</html>