<!DOCTYPE html>
<html>
	<head>
		<title>Class 31 - Project: Register by Invite</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<h3 class="h3">Login</h3>
		<form method="POST" action="receiver.php">
			Email:<br>
			<input type="text" name="email"><br><br>

			Password:<br>
			<input type="password" name="password"><br><br>

			<input type='hidden' name='action' value='login'>
			<input type="submit" value="Login"> <a href="register.php">Register</a>
		</form>
	</body>
</html> 