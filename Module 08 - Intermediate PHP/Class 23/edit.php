<?php

	require 'config.php';

	$id = 0;
	if (isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['title']) && empty($_POST['title']) == false
	   && isset($_POST['creation_date']) && empty($_POST['creation_date']) == false
	   && isset($_POST['post_body']) && empty($_POST['post_body']) == false
	   && isset($_POST['author']) && empty($_POST['author']) == false) {
		$title = addslashes($_POST['title']);
		$creation_date = addslashes($_POST['creation_date']);
		$post_body = addslashes($_POST['post_body']);
		$author = addslashes($_POST['author']);

		$sql = "UPDATE posts SET title = '$title',creation_date = '$creation_date',post_body = '$post_body',author = '$author' WHERE id ='$id'";
		$pdo->query($sql);

		header("Location: index.php");
	}

	$sql = "SELECT * FROM posts WHERE id='$id'";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		$data = $sql->fetch();
	} else {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 23 - Sample: Posts Control</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<form method="POST">
			Title: <br><input type="text" name="title" value="<?php echo $data['title']; ?>"><br>
			Creation Date: <br><input type="text" name="creation_date" value="<?php echo $data['creation_date']; ?>"><br>
			Post Body: <br><textarea name="post_body"><?php echo $data['post_body']; ?></textarea><br>
			Author: <br><input type="text" name="author" value="<?php echo $data['author']; ?>"><br><br>
			<input type="submit" value="Update">
		</form>
	</body>
</html>