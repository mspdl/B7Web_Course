<?php

	session_start();
	require'config.php';

	if(!empty($_GET['code'])) {
		$code = addslashes($_GET['code']);

		$sql = "SELECT * FROM users WHERE code = '$code'";
		$sql = $pdo->query($sql);

		if($sql->rowCount() <= 0 ) {
			header("Location: login.php");
			exit;
		}
	} else {
		header("Location: login.php");
		exit;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 31 - Project: Register by Invite</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<h3 class="h3">Register</h3>
		<form method="POST" action="receiver.php">
			Email:<br>
			<input type="text" name="email"><br><br>

			Password:<br>
			<input type="password" name="password"><br><br>

			<input type='hidden' name='action' value='register'>
			<input type="submit" value="Register">
		</form>
	</body>
</html>