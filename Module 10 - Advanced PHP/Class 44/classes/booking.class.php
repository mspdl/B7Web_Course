<?php

class Booking {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getReserves() {
		$array = array();
		$sql = $this->pdo->query("SELECT * FROM booking");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		} else {
			echo "There are no booking to show.";
		}
		return $array;
	}
}