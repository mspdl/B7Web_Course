<?php 
require 'config.php';

if (isset($_POST['gender']) && $_POST['gender'] != '') {
	$gender = $_POST['gender'];
	$sql = $pdo->prepare("SELECT * FROM users WHERE gender = ?");
	$sql->execute(array($gender));
} else {
	$gender = '';
	$sql = $pdo->query("SELECT * FROM users");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 40 - Filter on table</title>
	</head>
	<body>
		<form method="POST">
			<select name="gender">
				<option></option>
				<option value="0" <?php echo ($gender=='0')?'selected="selected"':''; ?>>Male</option>
				<option value="1" <?php echo ($gender=='1')?'selected="selected"':''; ?>>Female</option>
			</select>
			<input type="submit" value="Filter">
		</form>
		<hr>
		<table border="1" width="100%">
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>
			</tr>

			<?php 
			$genders = array(
				'0' =>  'Male',
				'1' => 'Female');

			if($sql->rowCount() > 0) {
				foreach ($sql->fetchAll() as $user) :
					?>
					<tr>
						<td><?php echo $user['name']; ?></td>
						<td><?php echo $genders[$user['gender']]; ?></td>
						<td><?php echo $user['age']; ?></td>
					</tr>
					<?php
				endforeach;
			}
			?>
		</table>
	</body>
</html>