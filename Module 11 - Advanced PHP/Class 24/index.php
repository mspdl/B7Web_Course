<?php
require "database.php";
$database = new Database("localhost","blog","root","root123");

$database->insert("posts", array(
	"title" => "Test title",
	"post_body" => "Teste body"
));

echo "Inserted successfully!";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 24 - CRUD: Insert Method</title>
	</head>
	<body>

	</body>
</html>