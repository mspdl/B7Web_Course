<?php

session_start();

if (isset($_POST['email']) && empty($_POST['email']) == false && 
	isset($_POST['password']) && empty($_POST['password']) == false) {

	$email = addslashes($_POST['email']);
	$password = md5(addslashes($_POST['password']));

	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "root123";

	try {
		$db = new PDO($dsn, $dbuser, $dbpass);

		$sql = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

		if($sql->rowCount() > 0) {

			$data = $sql->fetch();

			$_SESSION['id'] = $data['id'];

			header("Location: index.php");
		} else {
			echo "Login or password incorrect.";
		}

	} catch (PDOException $e) {
		echo "Database connection failed.";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 24 - Login System</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<form method="POST">
			E-mail:<br>
			<input type="email" name="email"><br><br>

			Password:<br>
			<input type="password" name="password"><br><br>

			<input type="submit" value="Login">
		</form>
		
	</body>
</html>