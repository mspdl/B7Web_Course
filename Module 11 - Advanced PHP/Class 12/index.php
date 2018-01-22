<?php

	class Post {
		private $title;
		private $date;
		private $body;
		private $comments;

		public function getTitle() {
			return $this->title;
		}

		public function setTitle($t) {
			if(is_string($t) && strlen($t) > 5) {
				$this->title = $t;
			}
		}

	}

	$post = new Post();
	$post->setTitle("New title");
	echo "Title: ".$post->getTitle();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 12 - Getter and Setter</title>
	</head>
	<body>

	</body>
</html>