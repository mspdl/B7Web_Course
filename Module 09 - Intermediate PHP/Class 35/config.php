<?php

$dbname = "mysql:dbname=project_cashmachine;host=localhost";
$dbuser = "root";
$dbpass = "root123";

try {
	$pdo = new PDO($dbname, $dbuser, $dbpass);
	$pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Failure: ".$e->getMessage();
	exit;
}