<?php 

try {
	$pdo = new PDO("mysql:dbname=project_uniquelogin;host=localhost","root","root123");
} catch (PDOException $e) {
	echo "FAILURE: ".$e->getMessage();
	exit;
}
 ?>