<?php 

	abstract class Animal {
		private $name;
		private $age;

		abstract protected function move();

		public function getName() {
			return $this->name;
		}

		public function setName($n) {
			$this->name = $n;
		}

		public function getAge() {
			return $this->age;
		}

		public function setAge($a) {
			$this->age = $a;
		}
	}

	class Horse extends Animal {
		private $legs_quantity;
		private $hair_type;

		public function move() {
			return "walking";
		}
	}

	$horse = new Horse();
	$horse->setName("Horse 1");
	$horse->setAge(10);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 16 - Class Abstraction</title>
	</head>
	<body>
		<?php echo "My horse's name is ".$horse->getName()."<br>"; ?>
		<?php echo "My horse's age is ".$horse->getAge()."<br>"; ?>
		<?php echo "My horse's move is ".$horse->move()."<br>"; ?>
	</body>
</html>