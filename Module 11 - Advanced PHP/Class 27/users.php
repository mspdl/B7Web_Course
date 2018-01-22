<?php 

class Users {

	private $db;

	public function __construct() {
		try {
			$this->db = new PDO("mysql:dbname=blog;host=localhost","root","root123");
		} catch (PDOException $e) {
			echo "FAILURE: ".$e->getMessage();
		}
	}

	public function select($id) {
		$sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
		$array = array();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}
		return $array;
	}

	public function insert($name, $email, $password) {
		$sql = $this->db->prepare("INSERT INTO users SET name = :name, email = :email, password = :password");
		$sql->bindParam(":name", $name);
		$sql->bindParam(":email", $email);
		$sql->bindValue(":password", md5($password));
		$sql->execute();
	}

	public function update($name, $email, $password, $id) {
		$sql = $this->db->prepare("UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?");
		$sql->execute(array($name, $email, md5($password), $id));
	}

	public function delete($id) {
		$sql = $this->db->prepare("DELETE FROM users WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
	}
}

?>