<?php 

$dbname = "project_bookingsystem";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root123";

try {
 	$pdo = new PDO("mysql:dbname=".$dbname.";host=".$dbhost, $dbuser, $dbpass);
 } catch (PDOException $e) {
 	echo "FAILURE: ".$e>getMessage();
 } ?>