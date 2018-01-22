<?php 

try {
	$pdo = new PDO("mysql:dbname=project_filtertable;host=localhost;","root","root123");
} catch (PDOException $e) {
	echo "FAILURE: ".$e->getMessage();
	exit;
}