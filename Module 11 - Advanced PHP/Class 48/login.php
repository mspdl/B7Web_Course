<?php 
session_start();
require 'config.php';

$_SESSION['lg']='';

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$sql = $pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
	$sql->execute(array($email, $password));


	if ($sql->rowCount() > 0) {
		$sql = $sql->fetch();
		$id = $sql['id'];
		$ip = $_SERVER['REMOTE_ADDR'];

		$_SESSION['lg'] = $id;

		$sql = $pdo->prepare("UPDATE users SET ip = ? WHERE id = ?");
		$sql->execute(array($ip, $id));

		header("Location: index.php");
		exit;
	} else {
		echo "Invalid email or password.<br/>";
	}
}

?>

<?php include 'header.html'; ?>
		<h1>Login Page</h1>

		<form method="POST">
			E-mail:<br/>
			<input type="text" name="email"><br/><br/>

			Password:<br/>
			<input type="password" name="password"><br/><br/>

			<input type="submit" name="login">
		</form>
<?php include 'footer.html'; ?>