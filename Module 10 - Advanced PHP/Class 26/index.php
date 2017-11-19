<?php
require "database.php";
$database = new Database("localhost","blog","root","root123");

$database->delete("posts", 
	array("id"=>"1")
);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 26 - CRUD: Delete Method</title>
	</head>
	<body>

	</body>
</html>