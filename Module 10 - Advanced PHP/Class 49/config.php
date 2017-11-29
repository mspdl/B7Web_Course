<?php 

$host = 'localhost';
$dbname = 'project_rating';
$dbuser = 'root';
$dbpass = 'root123';

try {
	$pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "FALIURE: ".$e->getMessage();
}

?>