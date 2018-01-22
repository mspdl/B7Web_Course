<?php 
session_start();
require 'config.php';
require 'classes/users.class.php';
require 'classes/documents.class.php';

if (!isset($_SESSION['logged'])) {
	header("Location: login.php");
	exit;
}

$user = new User($pdo);
$user->setUser($_SESSION['logged']);

$document = new Document($pdo);
$list = $document->getDocuments();

// html body
include 'header.html'; // header of the html default content
?>
<h1>System</h1>
<?php if($user->hasPermission('ADD')) : ?>
	<a href="">Add Document</a><br><br>
<?php endif; ?>

<?php if($user->hasPermission('S3CR3T')) : ?>
	<a href="secret.php">Secret Page</a><br><br>
<?php endif; ?>

<table border="1" width="100%">
	<tr>
		<th>File Name</th>
		<th>Actions</th>
	</tr>
	<?php foreach($list as $item): ?>
	<tr>
		<td><?php echo $item['title']; ?></td>
		<td>
			<?php if($user->hasPermission('EDIT')) : ?>
				<a href="">Edit</a>
			<?php endif; ?>
			<?php if($user->hasPermission('DEL')) : ?>
				<a href="">Delete</a>
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php include 'footer.html'; /* footer of the html default content */ ?>