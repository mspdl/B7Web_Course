<?php  ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 39 - Project: Multi-Column Search</title>
	</head>
	<body>
		<h1>Type user e-mail or cpf</h1>
		<form method="GET">
			<input type="text" name="field">
			<input type="submit" value="Search">
		</form>
		<hr>
		<?php 
		if(!empty($_GET['field'])) {
			$field = $_GET['field'];
			try {
				$pdo = new PDO("mysql:dbname=project_columnssearch;host=localhost","root","root123");
			} catch (PDOException $e) {
				echo "FAILURE: ".$e->getMessage();
				exit;
			}
			$sql = $pdo->prepare("SELECT * FROM users WHERE email = ? OR cpf = ?");
			$sql->execute(array($field, $field));
			if($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				echo "Name: ".$sql['name'];
			} else {
				echo "No results found.";
			}
		} 
		?>
	</body>
</html>