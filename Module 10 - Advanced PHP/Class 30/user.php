<?php 

class user {

	private $id;
	private $email;
	private $password;
	private $name;

	private $pdo;

	// Constructor
	public function __construct($i) {
		if(!empty($i)) {
			try {
				$this->pdo = new PDO("mysql:dbname=users;host:localhost","root","root123");
			} catch (PDOException $e) {
				echo "FAILURE: ".$e->getMessage();
			}
			$sql = "SELECT * FROM users WHERE id = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->execute(array($i));
			if($sql->rowCount() > 0) {
				$data = $sql->fetch();
				$this->id = $data['id'];
				$this->email = $data['email'];
				$this->password = $data['password'];
				$this->name = $data['name'];
			}
		}
	}

	// Getters & Setters
	public function getId() {
		return $this->id;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setPassword($password) {
		$this->password = md5($password);
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}

	public function save() {
		if(!empty($this->id)) {
			$sql = "UPDATE users SET email = '?', password = '?', name = '?' WHERE id = ?";
			$sql = $this->pdo->prepare()$sql;
			$sql->execute(array($this->email, $this->password, $this->name, $this->id))
		}else {
			$sql = "INSERT users SET email = '?', password = '?', name = '?'";
			$sql = $this->pdo->prepare()$sql;
			$sql->execute(array($this->email, $this->password, $this->name))
		}
	}
}

?>