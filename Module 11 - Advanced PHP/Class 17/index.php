<?php 

	interface Animal {

		public function move(); 

	}

	class Dog implements Animal {
		public function move() {
			echo "Walking";
		}
	}

	$dog = new Dog();
	$dog->move();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 17 - Interface</title>
	</head>
	<body>

	</body>
</html>