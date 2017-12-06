<?php 

$host = 'localhost';
$dbname = 'project_tags';
$dbuser = 'root';
$dbpass = 'root123';

try {
	$pdo = new PDO('mysql:dbname='.$dbname.';host='.$host,$dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
	echo $e->getMessage();
}
 ?>