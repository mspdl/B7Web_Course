<?php 
require 'config.php';

if(isset($_POST['email']) && !empty($_POST['email'])){

	$email = addslashes($_POST['email']);

	$sql = $pdo->prepare("SELECT * FROM users WHERE email = ?");
	$sql->execute(array($email));

	if($sql->rowCount() > 0){
		$sql = $sql->fetch();
		$id = $sql['id'];

		$token = md5(time().rand(0, 99999).rand(0, 99999));

		$sql = $pdo->prepare("INSERT INTO user_token (id_user, hash, expired_in) VALUES (?, ?, ?)");
		$sql->execute(array($id, $token, date('Y-m-d H:i', strtotime('+2 months'))));

		$link = "http://localhost/B7Web_Course/Module%2010%20-%20Advanced%20PHP/Class%2035/redefine.php?token=".$token;
		$msg = "Click on the link to set your password:<br><a href=".$link.'>Link</a>';
		$subject = "New password";
		$headers = 'From: seuemail@seusite.com.br'.'\r\n'.
				   'X-Mailer: PHP/'.phpversion();
		// mail($email, $subject, $msg, $headers);
		echo $msg;
		exit;
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 35 - I forgot my password</title>
	</head>
	<body>
		<form method="POST">
			What's your email?<br>
			<input type="email" name="email"><br><br>

			<input type="submit" name="Send">
		</form>
	</body>
</html>