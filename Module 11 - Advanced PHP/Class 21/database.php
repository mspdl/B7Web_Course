<?php

class Database {

	private $pdo;

	public function __construct($host, $dbname, $dbuser, $dbpass) {
		try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
		} catch (PDOException $e) {
			echo "Failed : ".$e->getMessage();	
		}
	}

}

?>