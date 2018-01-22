<?php 
require 'config.php';

if (!empty($_GET['id'])) {
 	$id = intval($_GET['id']);

 	$sql = $pdo->prepare("UPDATE users SET status = '0' WHERE id = ?");
 	$sql->execute(array($id));
 }

header("Location: index.php");
exit;