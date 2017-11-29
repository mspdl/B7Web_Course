<?php 
session_start();
require 'config.php';

if (empty($_SESSION['lg'])) {
	header("Location: login.php");
	exit;
} else {
	$id = $_SESSION['lg'];
	$ip = $_SERVER['REMOTE_ADDR'];

	$sql = $pdo->prepare("SELECT * FROM users WHERE id = ? AND ip = ?");
	$sql->execute(array($id, $ip));

	if ($sql->rowCount() == 0) {
		header("Location: login.php");
		exit;
	}
}


?>

<?php include 'header.html'; ?>
		<h1>Top Secret</h1>
		<a href="logout.php">logout</a>
<?php include 'footer.html'; ?>