<?php 

try {
 	$pdo = new PDO("mysql:dbname=project_bookingsystem;host=localhost", "root", "root123");
 } catch (PDOException $e) {
 	echo "FAILURE: ".$e>getMessage();
 } ?>