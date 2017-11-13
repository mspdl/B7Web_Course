<?php

	class Dog {

		public static function bark() {
			echo "au au";
		}
	}

	$jake = new Dog();
	$jake->bark();

	$milo = new Dog();
	$milo->bark();

	Dog::bark();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 10 - Instantiating a Class</title>
	</head>
	<body>

	</body>
</html>