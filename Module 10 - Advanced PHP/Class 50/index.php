<?php 
require 'config.php';
require 'classes/access.class.php';

$ip = $_SERVER['REMOTE_ADDR'];
$hour = date('H:i:s');

$access = new Access($pdo);
$access->insertAccess($ip, $hour);
$access->countUsers();
$access->clearDatabase();
?>

 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>Class 50 - Project: Users online</title>
	 </head>
	 <body>
	 	
	 </body>
 </html>