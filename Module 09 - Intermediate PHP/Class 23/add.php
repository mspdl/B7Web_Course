<?php
	require 'config.php';

	if(isset($_POST['title']) && empty($_POST['title']) == false
	   && isset($_POST['creation_date']) && empty($_POST['creation_date']) == false
	   && isset($_POST['post_body']) && empty($_POST['post_body']) == false
	   && isset($_POST['author']) && empty($_POST['author']) == false) {
		$title = addslashes($_POST['title']);
		$creation_date = addslashes($_POST['creation_date']);
		$post_body = addslashes($_POST['post_body']);
		$author = addslashes($_POST['author']);

		$sql = "INSERT INTO posts (title,creation_date,post_body,author) VALUES ('$title','$creation_date','$post_body','$author')";
		$pdo->query($sql);

		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 23 - Sample: Posts Control</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form method="POST">
			Title: <br><input type="text" name="title"><br>
			Creation Date: <br><input type="text" name="creation_date"><br>
			Post Body: <br><textarea name="post_body"></textarea><br>
			Author: <br><input type="text" name="author"><br><br>
			<input type="submit" value="Register">
		</form>
	</body>
</html> 