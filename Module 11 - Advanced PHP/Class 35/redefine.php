<?php 
require 'config.php';

if (isset($_GET['token']) && !empty($_GET['token'])) {
	$token = addslashes($_GET['token']);

	$sql = $pdo->prepare("SELECT * FROM user_token WHERE hash = ? AND used = 0 AND expired_in > NOW()");
	$sql->execute(array($token));

	if ($sql->rowCount() > 0) {
		$sql = $sql->fetch();
		$id = $sql['id_user'];

		if (!empty($_POST['password'])) {
			$password = md5($_POST['password']);

			$sql = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
			$sql->execute(array($password, $id));

			$sql = $pdo->prepare("UPDATE user_token SET used = 1 WHERE hash = ?");
			$sql->execute(array($token));

			echo "Password changed successfully.";
			exit;
		}

		?>
		<form method="POST">
			Insert the new password:<br>
			<input type="password" name="password"><br><br>

			<input type="submit" value="Change password">
		</form>
		<?php 
	}else {
		echo "Invalid or used token";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 35 - I forgot my password</title>
	</head>
	<body>
	</body>
</html>