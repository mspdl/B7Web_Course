<?php 

class User {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function toLogin($email, $password) {
		echo $email;
		echo $password;
		$sql = "SELECT * FROM users WHERE email = :email AND password = :password";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->bindValue(':password', $password);
		$sql->execute();
		echo $sql->rowCount();
		if($sql->rowCount() > 0 ) {
			$sql->fetch();
			$_SESSION['login'] = $sql['id'];
			echo "ok";
		} else {
			echo "Ivanlid email or password";
		}
	}
} 


?>