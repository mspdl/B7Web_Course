<?php 
require 'config.php';
require 'classes/movies.class.php';

$movies = new Movies($pdo);
$movie_list = $movies->getMovies();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Class 49 - Project: Rating System</title>
</head>
<body>
	<?php foreach ($movie_list as $item) : ?>
		<fieldset>
			<strong><?php echo $item['title'];?></strong><br/>
			<?php for($i=0;$i<5;$i++) : ?>
				<a href="vote.php?id=<?php echo $item['id'];?>&note=<?php echo ($i+1); ?>"><img src="img/star.png" height="20" /></a>
			<?php endfor; ?>
			<?php echo "(".$item['average'].")"; ?>
		</fieldset>
	<?php endforeach ?>
</body>
</html>