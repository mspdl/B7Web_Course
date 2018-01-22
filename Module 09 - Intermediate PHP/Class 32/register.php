<?php 
session_start();
require 'config.php';
require 'classes/user.class.php';

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email'])) {
	$name = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$id_father = $_SESSION['login'];

	$user = new User($pdo);
	$user->addUser($name, $email, $id_father);
}


?>

<?php include 'header.html'; ?>
	<h2>Register new user</h2>
	<form method="POST">
		Name: <br/>
		<input type="text" name="name"><br/><br/>

		Email: <br/>
		<input type="email" name="email"><br/><br/>

		<input type="submit" value="Register">
	</form>
<?php include 'footer.html'; ?>