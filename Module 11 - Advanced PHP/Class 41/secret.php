<?php 
session_start();
require 'config.php';
require 'classes/users.class.php';

if (!isset($_SESSION['logged'])) {
	header("Location: login.php");
	exit;
}

$user = new User($pdo);
$user->setUser($_SESSION['logged']);
if ($user->hasPermission('S3CR3T') == false) {
	header('Location: index.php');
	exit;
}

?>

<?php include 'header.html'; ?>
<h1>Secret Page</h1>
<?php include 'footer.html'; ?>
