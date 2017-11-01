<?php include'config.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 29 - Project: Comment System</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<fieldset class="form-control">
			<form method="POST" action="receiver.php">
				Name: <br>
				<input type="text" name="name"><br><br>

				Message: <br>
				<textarea name="msg"></textarea><br><br>

				<input type="submit" value="Send Message">
			</form>
		</fieldset>
		<br>

		<?php
			$sql = "SELECT * FROM messages ORDER BY msg_date DESC";
			$sql = $pdo->query($sql);

			if ($sql->rowCount() > 0) {
				foreach ($sql->fetchAll() as $msg) : 
					?>
					<strong><?php echo $msg['name'];?></strong><br>
					<?php echo $msg['msg']?><br>
					<small><i><?php echo $msg['msg_date'];?></i></small>
					<hr>
					<?php
				endforeach;
				
			} else {
				echo "There are no comments to show.<br>";
			}
		?>
		
	</body>
</html>