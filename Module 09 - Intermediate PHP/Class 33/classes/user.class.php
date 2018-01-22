<?php 

class User {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function toLogin($email, $password) {
		$sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":password", $password);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();

			$_SESSION['login'] = $sql['id'];

			header("Location: index.php");
			exit;
		} else {
			echo "Invalid user and/or password.";
		}
	}

	public function getUserName($id){
		$sql = $this->pdo->prepare("SELECT name FROM users WHERE id = ?");
		$sql->execute(array($id));
		$userInfos = array();
		if ($sql->rowCount() > 0) {
			$userInfos = $sql->fetch();
		}
		return $userInfos;
	}

	public function addUser($name, $email, $id_father) {
		$sql = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
		$sql->execute(array($email));
		if ($sql->rowCount() > 0) {
			echo "E-mail already registered.";
		} else {
			$sql = $this->pdo->prepare("INSERT INTO users (id_father, name, email, password) VALUES (?, ?, ?, ?)");
			if($sql->execute(array($id_father, $name, $email, md5($email)))) {
				header("Location: index.php");
				exit;
			} else {
				echo "Something is wrong and/or missing.";
			}
		}
	}

	public function listGuests($id_father, $limit) {
		$array = array();
		$sql = $this->pdo->prepare("SELECT * FROM users WHERE id_father = ?");
		$sql->execute(array($id_father));

		if ($sql->rowCount() > 0) {

			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
			foreach ($array as $key => $user) {
				$array[$key]['guests'] = array();
				if ($limit > 0) {
					$array[$key]['guests'] = $this->listGuests($user['id'], $limit-1);
				}
			}
		}
		return $array;
	}

	public function showGuests($array) {
		echo "<ul>";
		foreach ($array as $user) {
			echo "<li>";
			if (count($user['guests']) == 1) {
				$guest = 'guest';
			} else {
				$guest = 'guests';
			}
			echo $user['name'].' ('.count($user['guests']).' '.$guest.')';
			if (count($user['guests']) > 0) {
				$this->showGuests($user['guests']);
			}
			echo "</li>";
		}
		echo "</ul>";
	}
} 

?>