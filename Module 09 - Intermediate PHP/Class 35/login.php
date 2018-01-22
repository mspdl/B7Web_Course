<?php

session_start();
require'config.php';

if (isset($_POST['agency']) && !empty($_POST['agency']) &&
	isset($_POST['account']) && !empty($_POST['account']) &&
	isset($_POST['password']) && !empty($_POST['password'])) {

	$agency = addslashes($_POST['agency']);
	$account = addslashes($_POST['account']);
	$password = addslashes($_POST['password']);

	$sql = $pdo->prepare("SELECT * FROM accounts WHERE agency = :agency AND account = :account AND password = :password");
	$sql->bindValue(":agency", $agency);
	$sql->bindValue(":account", $account);
	$sql->bindValue(":password", md5($password));
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$sql = $sql->fetch();

		$_SESSION['bank'] = $sql['id'];
		header("Location: index.php");
		exit;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Class 35 - Project: Cash machine online (1/2)</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<form method="POST">
		Agency: <br>
		<input type="number" name="agency"><br><br>

		Account: <br>
		<input type="number" name="account"><br><br>

		Password: <br>
		<input type="password" name="password"><br><br>

		<input type="submit" value="Login"><br><br>
	</form>
</body>
</html> 