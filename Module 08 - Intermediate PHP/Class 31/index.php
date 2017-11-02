<?php

	session_start();
	require'config.php';

	if (empty($_SESSION['logged'])) {
		header("Location: login.php");
	}

	$email = '';
	$sql = "SELECT email,code FROM users WHERE id = '".addslashes($_SESSION['logged'])."'";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) {
		$info = $sql->fetch();
		$email = $info['email'];
		$code = $info['code'];
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Class 31 - Project: Register by Invite</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<h1>Internal System Area</h1>
		<p>User: <?php echo $email; ?> - <a href="logout.php">Logout</a></p>
		<p><a href="http://localhost/B7Web_Course/Module%2008%20-%20Intermediate%20PHP/Class%2031/register.php?code=<?php echo $code; ?>">Link for New Invitations</p></a>
	</body>
</html>