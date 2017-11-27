<?php

class Booking {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getReserves($start_date, $end_date) {
		$array = array();
		$sql = $this->pdo->prepare("SELECT * FROM booking WHERE ( NOT (start_date > ? OR end_date < ?) ) ");
		$sql->execute(array($end_date, $start_date));
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		} else {
			echo "There are no booking to show.";
		}
		return $array;
	}

	public function checkAvailability($car, $start_date, $end_date) {
		$sql = $this->pdo->prepare("SELECT * FROM booking WHERE id_car = ? AND ( NOT (start_date > ? OR end_date < ?) )");
		$sql->execute(array($car, $end_date, $start_date));

		if ($sql->rowCount() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function reserve($car, $start_date, $end_date, $person) {
		$sql = $this->pdo->prepare("INSERT INTO booking (id_car, start_date, end_date, person) VALUES (?, ?, ?, ?)");
		$sql->execute(array($car, $start_date, $end_date, $person));
	}
}