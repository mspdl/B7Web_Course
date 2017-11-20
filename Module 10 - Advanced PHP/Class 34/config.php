<?php 

try {
	$dsn = "mysql:dbname=registration;host=localhost";
	$pdo = new PDO($dsn, "root", "root123");
} catch (PDOException $e) {
	echo "FAILURE: ".$e->getMessage;
	die;
}

 ?>