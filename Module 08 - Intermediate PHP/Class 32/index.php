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
	<?php $userName = $user->getUserName($_SESSION['login']); ?>
	<h2>Hello, <?php echo $userName['name']; ?></h2>
	<a href="register.php">Add new user</a>
	<hr>
	<h3>Your guest users</h3>
		<?php $childrenList = $user->listChildren($_SESSION['login']) ?>
		<?php foreach ($childrenList as $item) : ?>
			<?php echo $item['name']; ?><br/>
		<?php endforeach; ?>
	<hr>
	<a href="logout.php">logout</a>
<?php include 'footer.html' ?>