<?php 
require 'config.php';
require 'classes/users.class.php';

if (!isset($_SESSION['logged'])) {
	header("Location: login.php");
	exit;
}

$user = new User($pdo);
$user->setUser($_SESSION['logged']);
// html body
include 'header.html'; // header of the html default content
?>
<h1>System</h1>
<?php
include 'footer.html'; // footer of the html default content
?>