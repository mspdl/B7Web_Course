<?php

	class Dog {
		public $name;
		private $age;
	}

	$milo = new Dog();
	$milo->name = "Milo";

	class Post {
		private $title;
		private $date;
		private $body;
		private $comments;
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 11 - Defining Properties</title>
	</head>
	<body>
		<?php echo "The name of my dog is ".$milo->name."."; ?>
	</body>
</html>