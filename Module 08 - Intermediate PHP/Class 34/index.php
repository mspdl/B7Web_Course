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
	<?php $userInfos = $user->getUserInfos($_SESSION['login']); ?>
	<h2>Hello, <?php echo $userInfos['name'].'! You are '.$userInfos['p_name'].'.'; ?></h2>
	<a href="register.php">Add new user</a>
	<hr>
	<h3>Your guests</h3>
		<?php $guestsList = $user->listGuests($_SESSION['login'], $limit) ?>
		<?php $user->showGuests($guestsList); ?>
	<hr>
	<a href="logout.php">logout</a>
<?php include 'footer.html' ?>