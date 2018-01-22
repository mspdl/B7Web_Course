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

	public function getUserInfos($id){
		$sql = $this->pdo->prepare("
			SELECT u.name, p.name as p_name
			FROM users as u 
			LEFT JOIN positions as p ON p.id = u.position
			WHERE u.id = ?");
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
		$sql = $this->pdo->prepare("SELECT
			u.id, u.id_father, u.position, u.name, p.name as p_name 
			FROM users as u 
			LEFT JOIN positions as p ON p.id = u.position
			WHERE u.id_father = ?");
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
			echo $user['name'].' ('.$user['p_name'].') - ('.count($user['guests']).' direct '.$guest.')';
			if (count($user['guests']) > 0) {
				$this->showGuests($user['guests']);
			}
			echo "</li>";
		}
		echo "</ul>";
	}

	public function updateUsers($id_father, $limit) {
		$array = array();
		$guests = 0;
		$sql = $this->pdo->prepare("SELECT * FROM users WHERE id_father = ?");
		$sql->execute(array($id_father));
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll(PDO::FETCH_ASSOC);
			$guests = $sql->rowCount();
			foreach ($array as $key => $user) {
				if ($limit > 0) {
					$guests += $this->updateUsers($user['id'], $limit-1);
				}
			}
		}
		return $guests;
	}
} 

?>