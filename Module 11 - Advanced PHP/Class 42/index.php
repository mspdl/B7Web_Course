<?php 
session_start();
if (!isset($_SESSION['captcha'])) {
	$n = rand(1000,9999);
	$_SESSION['captcha'] = $n;
}

if (!empty($_POST['email'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$code = $_POST['code'];

	if($code == $_SESSION['captcha']) {
		echo "Logged successfully!";
	} else {
		echo "Wrong code.";
	}
	$n = rand(1000,9999);
	$_SESSION['captcha'] = $n;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 42 - Captcha</title>
	</head>
	<body>
		<form method="POST">
			E-mail:<br>
			<input type="email" name="email"><br><br>

			Password:<br>
			<input type="password" name="password"><br><br>

			<img src="image.php" width="100" height="50"><br>
			<input type="text" name="code" size="4"><br><br>

			<input type="submit" value="Enter">
		</form>
	</body>
</html>