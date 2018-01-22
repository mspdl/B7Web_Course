<?php
require "database.php";
$database = new Database("localhost","blog","root","root123");

$database->query("SELECT * FROM posts LIMIT 5");
$number = $database->getNumRows();

if ($database->getNumRows() > 0) {
	foreach ($database->result() as $post) {
		echo "Title: ".$post['title']."<br>";
		echo "Body: ".$post['post_body']."<br>";
		echo "Creation Data: ".$post['creation_date']."<br>";
		echo "Author: ".$post['author']."<br>";
		echo "<hr>";
	}
} else {
	echo "There are no posts to show.";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 23 - CRUD: Result Method</title>
	</head>
	<body>

	</body>
</html>