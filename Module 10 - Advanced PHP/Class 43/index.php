<?php
require 'config.php';
$sql = $pdo->query("SELECT * FROM users WHERE status = 1");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 43 - Project: Items Trash</title>
	</head>
	<body>
		<table border="1" width="100%">
			<tr>
				<th>Name</th>
				<th>E-mail</th>
				<th>Actions</th>
			</tr>
			<?php 
			if ($sql->rowCount() > 0) {
				$sql = $sql->fetchAll();
			} else {
				echo "There are no users to show.";
			}

			foreach ($sql as $item) : ?>
				<tr>
					<td><?php echo $item['name']; ?></td>
					<td><?php echo $item['email']; ?></td>
					<td><a href="delete.php?id=<?php echo $item['id'] ?>">Delete</a></td>
				</tr>
			<?php endforeach ?>
				
		</table>
	</body>
</html>