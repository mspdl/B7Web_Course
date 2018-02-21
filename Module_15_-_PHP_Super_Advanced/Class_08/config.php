<?php 
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/B7Web_Course/Module_15_-_PHP_Super_Advanced/Class_08/");
	$config['dbname'] = 'mvc_structure';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root123';
} else {
	define("BASE_URL", "http://morganespindola.com/mvc");
	$config['dbname'] = 'xxxx';
	$config['host'] = 'xxxx';
	$config['dbuser'] = 'xxxx';
	$config['dbpass'] = 'xxxx';
}

global $db;

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);	
} catch (PDOException $e) {
	echo "FAILURE: ".$e->getMessage();
}

?>