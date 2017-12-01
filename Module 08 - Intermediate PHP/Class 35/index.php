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
	<title>Class 34 - Project: Cash machine online</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1 class="h1">Morgan's Bank</h1>
	Hello, <strong><?php echo $data['owner']?></strong>!<br>
	Agency: <?php echo $data['agency']?><br>
	Account: <?php echo $data['account']?><br>
	Balance: $ <?php echo $data['balance']?><br>
	<a href="logout.php">Logout</a>
	<hr class="hr">
	<h3 class="h3" >Trasactions/Statement</h3>
	<a href="add_transaction.php" style="padding-left: 350px">Add Transaction</a>
	<table width="400">
		<tr>
			<th>Date</th>
			<th>Value</th>
		</tr>
		<?php
			$sql = $pdo->prepare("SELECT * FROM historical WHERE id_account = :id_account");
			$sql->bindValue(":id_account", $id);
			$sql->execute();

			if($sql->rowCount() > 0) {
				foreach ($sql->fetchAll() as $item) : ?>
					<tr>
						<td><?php echo date('d/m/Y H:i', strtotime($item['operation_date'])); ?></td>
						<td>
							<?php if($item['type'] == 0){ ?>
								<span style="color:green">
							<?php } else { ?>
								<span style="color:red">
							<?php } ?>
							<?php echo '$ '.$item['value']; ?></span></td>
					</tr>
				<?php endforeach;
			}
		?>
	</table>
</body>
</html> 