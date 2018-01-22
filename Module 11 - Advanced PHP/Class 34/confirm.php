<?php 
require 'config.php';

$h = $_GET['h'];

if (!empty($h)) {
	$pdo->query("UPDATE users SET status = '1' WHERE MD5(id) = '$h'");
	echo "Registration confirmed successfully.";
}

?>