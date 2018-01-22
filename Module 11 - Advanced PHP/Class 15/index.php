<?php 

	class Animal {
		public $name;
		private $age;
	}

	class Horse extends Animal {
		private $legs_quantity;
		private $hair_type;
	}

	class Cat extends Animal {
		private $legs_quantity;
		private $meow;
	}

	$horse = new Horse();
	$horse->name = "Horse 1";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 15 - Class Inheritance</title>
	</head>
	<body>
		<?php echo "My horse's name is ".$horse->name; ?>
	</body>
</html>