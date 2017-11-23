<?php 
session_start();
require 'config.php';
require 'classes/users.class.php';

if (!empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$user = new User($pdo);

	if($user->login($email, $password)) {
		header("Location: index.php");
		exit;
	} else {
		echo "User and/or password are wrong.";
	}
}

include 'header.html';
?>
<h1>Login</h1>
<form method="POST">
	E-mail:<br>
	<input type="email" name="email"><br><br>
	
	Password:<br>
	<input type="password" name="password"><br><br>

	<input type="submit" value="login">
</form>
<?php include 'footer.html' ?>