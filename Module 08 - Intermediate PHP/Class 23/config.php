<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "root123";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch(PDOException $e) {
	echo "Connection Failed: ".$e->getMessage();
}