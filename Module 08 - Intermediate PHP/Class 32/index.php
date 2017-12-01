<?php 
require 'config.php';

if (empty($_SESSION['login'])) {
	header("Location: login.php");
	exit;
} else {

}

 ?>


<?php include 'header.html' ?>
	 
<?php include 'footer.html' ?>