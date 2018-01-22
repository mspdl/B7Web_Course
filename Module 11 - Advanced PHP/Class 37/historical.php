<?php 

class Historical {

	private $pdo;

	public function __construct() {
		try {
			$this->pdo = new PDO("mysql:dbname=project_eventlogs;host=localhost","root","root123");
		} catch (PDOException $e) {
			echo "FAILURE: ".$e>getMessage();
		}
	}

	public function register($action) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$sql = $this->pdo->prepare("INSERT INTO historical SET ip = ?, date_action = NOW(), action = ?");
		$sql->execute(array($ip, $action));
	}
}