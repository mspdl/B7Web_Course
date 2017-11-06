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

		// getting and (maybe) changing the code from invite code
		$cc_code = addslashes($_GET['code']); // get the code
		$sql = $pdo->query("SELECT * FROM users WHERE code = '$cc_code'"); // select all users with the code
		$data = $sql->fetch(); // filling a variable with the query result
		$cc_code_count = $data['code_count']; // filling a variable with the code counter of the getted code
		$sql = $pdo->query("UPDATE users SET code_count = '$cc_code_count' + 1 WHERE code = '$cc_code'"); // now plus 1 on code count of the selected user who inveted

		// creating new user
		$code = md5(rand(0,9999).rand(0,9999));
		$sql = "INSERT INTO users (email, password, code, code_count) VALUES ('$email', '$password', '$code', '1')";

		$sql = $pdo->query($sql);

		unset($_SESSION['logged']);

		header("Location: login.php");
		exit;
	} else {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
}