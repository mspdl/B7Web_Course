<?php 

class User {

	private $pdo;
	private $id;
	private $permissions;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function login($email, $password) {
		$sql = $this->pdo->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$sql->execute(array($email, $password));

		if ($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$_SESSION['logged'] = $sql['id'];
			return true; 
		} else {
			return false;
		}
	}

	public function setUser($id) {
		$this->id = $id;

		$sql = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
		$sql->execute(array($id));

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$this->permissions = explode(", ", $sql['permissions']);
		}
	}
}