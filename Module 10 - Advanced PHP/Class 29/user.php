<?php 

class user {

	private $id;
	private $email;
	private $password;
	private $name;

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
		$this->password = $password;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

?>