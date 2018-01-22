<?php 

class Access {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function insertAccess($ip, $hour) {
		$sql = $this->pdo->prepare("INSERT INTO accesses (ip, hour) VALUES (? , ?)");
		if ($sql->execute(array($ip, $hour))) {
			echo "Access inserted.<br/>";
		} else {
			echo "Access not registered, something is wrong.<br/>";
		}
	}

	public function countUsers() {
		$sql = $this->pdo->prepare("SELECT ip FROM accesses WHERE hour > ? GROUP BY ip");
		$sql->execute(array(date('H:i:s', strtotime("-5 minutes"))));
		$usersOnline = $sql->rowCount();
		echo date('H:i:s', strtotime("-5 minutes"));
		echo "Users Online: ".$usersOnline."<br/>";
	}

	public function clearDatabase() {
		$sql = $this->pdo->prepare("DELETE FROM accesses WHERE hour < ?");
		$sql->execute(array(date('H:i:s', strtotime("-10 minutes"))));
	}

}

 ?>