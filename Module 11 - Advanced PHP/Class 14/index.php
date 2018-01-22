<?php

	class Post {
		private $title;
		private $date;
		private $body;
		private $comments;
		private $qtComments;

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

		public function addComments($msg) {
			$this->comments[] = $msg;
			$this->countComments();
		}

		private function countComments() {
			$this->qtComments = count($this->comments);
		}

		public function getCommentsQuantity() {
			return $this->qtComments;
		}

	}

	$post = new Post("Any title","Body of my post");
	$post->addComments("Test 1");
	$post->addComments("Test 2");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 14 - Auxiliary Methods</title>
	</head>
	<body>
		<?php echo "<h1>Post Title: ".$post->getTitle()."</h1>"; ?>
		<?php echo "<p>".$post->getBody()."</p>"; ?>
		<?php echo "<p>Quantity's comments: ".$post->getCommentsQuantity()."</p>"; ?>
	</body>
</html>