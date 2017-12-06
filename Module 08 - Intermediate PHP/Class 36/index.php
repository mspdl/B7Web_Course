<?php

session_start();
require'config.php';

if (isset($_SESSION['bank']) && !empty($_SESSION['bank'])) {
	$id = $_SESSION['bank'];
	$sql = $pdo->prepare("SELECT * FROM accounts WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$data = $sql->fetch();
	} else {
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
	<title>Class 36 - Project: Cash machine online (2/2)</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1 class="h1">Morgan's Bank</h1>
	Hello, <strong><?php echo $data['owner']?></strong>!<br>
	Agency: <?php echo $data['agency']?><br>
	Account: <?php echo $data['account']?><br>
	Balance: $ <?php echo $data['balance']?><br>
	<a href="logout.php">Logout</a>
</body>
</html> 