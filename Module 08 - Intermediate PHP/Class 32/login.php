<?php 
session_start();
require 'config.php';
require 'classes/user.class.php';
$user = new User($pdo);

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$user->toLogin($email, $password);
}

?>

<?php include 'header.html' ?>
	<h1>Login</h1>
	<form method="POST">
		E-mail: <br/>
		<input type="email" name="email"><br/><br/>

		Password: <br/>
		<input type="password" name="password"><br/><br/>

		<input type="submit" value="login">
	</form>
<?php include 'footer.html' ?>