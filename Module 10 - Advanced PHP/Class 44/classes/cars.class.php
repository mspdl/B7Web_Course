<?php 

class Cars {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

}