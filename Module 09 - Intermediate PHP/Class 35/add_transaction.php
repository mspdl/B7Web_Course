<?php 

session_start();
require'config.php';

if(isset($_POST['type']) && isset($_POST['value']) && !empty($_POST['value'])) {

	$type = addslashes($_POST['type']);
	$value = addslashes(str_replace(",",".",$_POST['value']));
	$value = floatval($value);

	$sql = $pdo->prepare("INSERT INTO historical (id_account, type, value, operation_date) VALUES (:id_account, :type, :value, NOW())");
	$sql->bindValue(":id_account", $_SESSION['bank']);
	$sql->bindValue(":type", $type);
	$sql->bindValue(":value", $value);

	$sql->execute();	

	if($type == '0') {
		// Deposit
		$sql = $pdo->prepare("UPDATE accounts SET balance = balance + :value WHERE id = :id;");
		$sql->bindValue(":value", $value);
		$sql->bindValue(":id", $_SESSION['bank']);
		$sql->execute();
	} else {
		// Withdrawal
		$sql = $pdo->prepare("UPDATE accounts SET balance = balance - :value WHERE id = :id;");
		$sql->bindValue(":value", $value);
		$sql->bindValue(":id", $_SESSION['bank']);
		$sql->execute();
	}

	header("Location: index.php");
	exit;

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Class 34 - Project: Cash machine online</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<form method="POST">
		Transaction Type: <br>
		<select name="type">
			<option value="0">Deposit</option>
			<option value="1">Withdrawal</option>
		</select><br><br>

		Value: <br>
		<input type="text" name="value" pattern="[0-9.,]{1,}"><br><br>

		<input type="submit" value="Add">
	</form>
</body>
</html> 