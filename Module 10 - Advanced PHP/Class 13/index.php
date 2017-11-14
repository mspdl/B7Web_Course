<?php

	class Post {
		private $title;
		private $date;
		private $body;
		private $comments;

		public function __construct($t, $b) {
			$this->setTitle($t);
			$this->setBody($b);
		}

		public function getTitle() {
			return $this->title;
		}

		public function setTitle($t) {
			if(is_string($t) && strlen($t) > 5) {
				$this->title = $t;
			}
		}

		public function getBody() {
			return $this->body;
		}

		public function setBody ($b) {
			$this->body = $b;
		}

	}

	$post = new Post("Any title","Body of my post");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 13 - Constructor</title>
	</head>
	<body>
		<?php echo "<h1>Post Title: ".$post->getTitle()."</h1>"; ?>
		<?php echo "<p>".$post->getBody()."</p>"; ?>
	</body>
</html>