<?php 
session_start();

if(!empty($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

require 'config.php';
require 'Language.class.php';
$lang = new Language();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Class 38 - Project: Multi Language</title>
	</head>
	<body>
		<a href="index.php?lang=en">English</a>
		<a href="index.php?lang=pt-br">Português</a>
		<a href="index.php?lang=es">Español</a>
		<hr>
		<?php echo $lang->languegeDefined(); ?>
		<hr>
		<button><?php echo $lang->get('BUY'); ?></button>
		<a href=""><?php echo $lang->get("LOGOUT") ?></a>
		<hr>
		<?php echo $lang->get('NAME').": Morgan"; ?>
		<hr>
		<?php 
		echo $lang->get('CATEGORY').":<br>";
		$sql = $pdo->prepare("SELECT id, (SELECT value from lang WHERE lang.lang = ? AND lang.name = categories.lang_item) as name FROM categories");
		$sql->execute(array($lang->getLanguage()));
		if ($sql->rowCount() > 0 ) {
			foreach ($sql->fetchAll() as $category) {
				echo ' - '.$category['name'].'<br>';
			}
		}
		?>
	</body>
</html>