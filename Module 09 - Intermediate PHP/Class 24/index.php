<?php

	session_start();

	if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
		echo "Restrict area.";
	} else {
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 24 - Login System</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		
	</body>
</html> 