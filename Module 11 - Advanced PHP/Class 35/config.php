<?php 

try {
	$pdo = new PDO("mysql:dbname=project_forgetthepassword;host=localhost","root","root123");
} catch (PDOException $e) {
	echo "FAILURE: ".$e->getMessage();
	exit;
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