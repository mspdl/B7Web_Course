<?php 

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	file_put_contents("test.txt", $name, FILE_APPEND);

	header("Location: index.php");
}

?>

<form method="POST">
	<input type="text" name="name" autofocus>
	<input type="submit" value="Send">
</form>