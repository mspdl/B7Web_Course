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
} 

?>