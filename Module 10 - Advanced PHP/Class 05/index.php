<?php
	
	if (isset($_POST['name']) && !empty($_POST['name']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['message']) && !empty($_POST['message'])
	) {
		$name = addslashes($_POST['name']);
		$email = addslashes($_POST['email']);
		$message = addslashes($_POST['message']);

		$to = "morgan.espindola@gmail.com";
		$subject = "Question from contact";
		$body = "Name: ".$name." - E-mail: ".$email." - Message: ".$message;
		$header = "From: morgan.espindola@gmail.com"."\r\n". // who send the email
				  "Reply-To: ".$email."\r\n". // who to reaply
				  "X-Mailer: PHP/".phpversion();

		mail($to, $subject, $body, $header);

		echo("<h2>Email sent successfully.</h2>");
		exit;

	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 05 - Email Send</title>
	</head>
	<body>
		<form method="POST">
			Name:<br>
			<input type="name" name="name"><br><br>

			E-mail:<br>
			<input type="email" name="email"><br><br>

			Message:<br>
			<textarea name="message"></textarea><br><br>

			<input type="submit" value="Send">
		</form>
	</body>
</html>