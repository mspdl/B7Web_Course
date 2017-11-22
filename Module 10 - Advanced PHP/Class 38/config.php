<?php 

try {
	global $pdo;
	$pdo = new PDO("mysql:dbname=project_multilanguage;host=localhost","root","root123");
} catch (PDOException $e) {
	echo "FAILURE: ".$e->getMessage();
}

 ?>