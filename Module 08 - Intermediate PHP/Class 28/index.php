<?php 
	include"config.php";
	
	if (isset($_GET['order']) && !empty($_GET['order'])) {
		$order = addslashes($_GET['order']);
		$sql = "SELECT * from users ORDER BY ".$order;
	} else {
		$order = '';
		$sql = "SELECT * from users";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 28 - Project: Result Ordination</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<form>
			<select name="order" onchange="this.form.submit()">
				<option selected></option>
				<option value="name" <?php echo ($order=="name")?"selected":'';?>>Order by name</option>
				<option value="age" <?php echo ($order=="age")?"selected":'';?>>Order by age</option>
			</select>
		</form>

		<table class="table">
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
			<?php		
				$sql = $pdo->query($sql);
				if ($sql->rowCount() > 0) {
					foreach ($sql->fetchAll() as $user) : ?>
						<tr>
							<td><?php echo $user['name']; ?></td>
							<td><?php echo $user['age']; ?></td>
						</tr>
					<?php 
					endforeach;
				} else {
					echo "<tr><td>There are no users to show.</td></tr>";
				}
			?>
		</table>
	</body>
</html>