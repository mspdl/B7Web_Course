<?php 

$host = 'localhost';
$dbname = 'project_mlm';
$dbuser = 'root';
$dbpass = 'root123';

try {
	$pdo = new PDO('mysql:dbname'.$dbname.';host='.$host,$dbuser, $dbpass);
} catch (PDOException $e) {
	echo $e;
}
 ?>