<?php 
session_start();
require 'config.php';
require 'classes/user.class.php';


if (!empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$user = new User($pdo);
	$user->toLogin($email, $password);
}

?>

<?php include 'header.html' ?>
	<h2>Login</h2>
	<form method="POST">
		E-mail: <br/>
		<input type="email" name="email"><br/><br/>

		Password: <br/>
		<input type="password" name="password"><br/><br/>

		<input type="submit" value="login">
	</form>
<?php include 'footer.html' ?>