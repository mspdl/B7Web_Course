<?php 
session_start();
$_SESSION['lg'] = NULL; 
header("Location: index.php");
?>