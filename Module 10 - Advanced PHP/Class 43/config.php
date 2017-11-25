<?php 
try {
 	$pdo = new PDO("mysql:dbname=project_itemstrash;host=localhost","root","root123");
 } catch (DPOException $e) {
 	echo "FAILURE: ".$e->getMessage();
 	exit;
 }