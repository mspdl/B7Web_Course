<?php 

class Animal {
	public function getName() {
		echo "getName's Animal class<br>";
	}

	public function test() {
		echo "TEST<br>";
	}
}

class Dog extends Animal {
	public function getName() {
		$this->test();
	}
}

$dog = new Dog();
$dog->getName();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 18 - Polymorphism</title>
	</head>
	<body>

	</body>
</html>