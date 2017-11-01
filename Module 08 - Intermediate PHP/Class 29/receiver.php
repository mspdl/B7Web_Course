<?php

include'config.php';

if (isset($_POST['name']) && !empty($_POST['name']) && 
	isset($_POST['msg']) && !empty($_POST['msg'])) {
	
	$name = $_POST['name'];
	$msg = $_POST['msg'];

	$sql = $pdo->prepare("INSERT INTO messages (name,msg,msg_date) VALUES ('$name','$msg',NOW())");
	$sql->execute();

	header("Location: index.php");
} else {
	header("Location: index.php");
}