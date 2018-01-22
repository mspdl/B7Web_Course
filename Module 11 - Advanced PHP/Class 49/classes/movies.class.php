<?php 

class Movies {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getMovies() {
		$array = array();
		$sql = $this->pdo->query("SELECT * FROM movies");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		} else {
			echo "There no movies to show.";
		}
		return $array;
	}
}

?>