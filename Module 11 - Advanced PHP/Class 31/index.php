<?php 
require "user.php";

/* Deleting an user */
$user = new User(2);
$user->delete();

echo "User deleted successfully.";

/* Updating an user 
$user = new User(3);
$user->setName("Tester 3");
$user->save();

echo "User updated successfully.";
*/


/* Registering a new user
$user = new User();
$user->setEmail("test@hotmail.com");
$user->setPassword("123");
$user->SetName("Tester");
$user->save();

echo "User registered successfully.";
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 31 - User Class (Final)</title>
	</head>
	<body>

	</body>
</html>