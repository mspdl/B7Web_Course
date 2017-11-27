<?php 

class Cars {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getCars() {
		$array = array();
		$sql = $this->pdo->query("SELECT * FROM cars");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}else {
			echo "There are no cars to show.";
		}
		return $array;
	}
	
}