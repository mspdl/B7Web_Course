<?php 
session_start();
require 'config.php';
require 'classes/user.class.php';

$user = new User($pdo);

if (empty($_SESSION['login'])) {
	header("Location: login.php");
	exit;
} 

 ?>


<?php include 'header.html' ?>
	<h1>Multilevel Marketing System</h1>
	<?php $userName = $user->getUserName($_SESSION['login']); ?>
	<h2>Hello, <?php echo $userName['name']; ?></h2>
	<a href="register.php">Add new user</a>
	<hr>
	<a href="logout.php">logout</a>
<?php include 'footer.html' ?>