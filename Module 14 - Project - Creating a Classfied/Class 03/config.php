<?php 
session_start();

try {
	$pdo = new PDO("mysql:dbname=project_classified;host=localhost","root","root123");
} catch (PDOException $e) {
	echo "FAILED: "+$e.getMessage();
	exit;
}

?>