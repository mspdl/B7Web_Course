<?php

session_start();
include'config.php';

// Login
if (isset($_POST['email']) && !empty($_POST['email']) && 
	isset($_POST['password']) && !empty($_POST['password']) &&
	$_POST['action']=='login') {
	
	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$sql = "SELECT id FROM users where email = '$email' AND password='$password'";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
		$info = $sql->fetch();

		$_SESSION['logged'] = $info['id'];
		header("Location: index.php");
		exit;
	} else {
		header("Location: login.php");
		exit;
	}
} 

// Register
if (isset($_POST['email']) && !empty($_POST['email']) && 
	isset($_POST['password']) && !empty($_POST['password']) &&
	$_POST['action']=='register') {

	$email = addslashes($_POST['email']);
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email = '$email'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() <= 0) {

		$code = md5(rand(0,9999).rand(0,9999));
		$sql = "INSERT INTO users (email, password, code) VALUES ('$email', '$password', '$code')";

		$sql = $pdo->query($sql);

		/*
		unset($_SESSION['logged']);

		header("Location: login.php");
		exit;
		*/
	}
	
}