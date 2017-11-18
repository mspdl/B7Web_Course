<?php
require "database.php";
$database = new Database("localhost","blog","root","root123");

$database->update("posts", 
	array("title" => "Test title"),
	array("id"=>"1")
);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 25 - CRUD: Update Method</title>
	</head>
	<body>

	</body>
</html>