<?php 
require 'config.php';

if(isset($_POST['name']) && !empty($_POST['name']) &&
   isset($_POST['email']) && !empty($_POST['email'])
) {
	$name = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);

	$pdo->query("INSERT INTO users SET name = '$name', email = '$email'");
	$id = $pdo->lastInsertId();
	$md5 = md5($id);
	$link = 'http://www.morganespindola.com/registrationbyapproval/confirm.php?h='.$md5;

	$subject = "Confirm your registration";
	$msg = "Click the link above to confirm your registration.\n\n".$link;
	$headers = "From: morgan.espindola@gmail.com"."\r\n".
				"X-Mailer: PHP/".phpversion();

	mail($email, $subject, $msg, $headers);

	echo "Data sent. Please check your email to confirm your registration.";
	exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 34 - Project: Registration with approval</title>
	</head>
	<body>
		<form method="POST">
			Name:<br>
			<input type="text" name="name"><br><br>

			E-mail:<br>
			<input type="email" name="email"><br><br>

			<input type="submit" value="Register">
		</form>
	</body>
</html>