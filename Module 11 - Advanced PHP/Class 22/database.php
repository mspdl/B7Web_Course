<?php

class Database {

	private $pdo;
	private $numRows;
	private $array;

	public function __construct($host, $dbname, $dbuser, $dbpass) {
		try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
		} catch (PDOException $e) {
			echo "Failed : ".$e->getMessage();	
		}
	}

	public function query($sql) {
		$query = $this->pdo->query($sql);
		$this->numRows = $query->rowCount();
	}

	public function getNumRows() {
		return $this->numRows;
	}

}

?>