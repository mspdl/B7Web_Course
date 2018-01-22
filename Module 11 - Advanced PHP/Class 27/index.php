<?php 
require "users.php";

$u = new Users();

$u->delete(2);
$result = $u->select(2);
print_r($result);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Class 27 - PDO Statement</title>
	</head>
	<body>

	</body>
</html>