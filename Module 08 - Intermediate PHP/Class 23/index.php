<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 23 - Sample: Posts Control</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<a href="add.php" class="btn btn-primary">Add new Post</a>
		<table border="0" width="100%">
			<tr>
				<th>Title</th>
				<th>Creation Date</th>
				<th>Post Body</th>
				<th>Author</th>
				<th>Action</th>
			</tr>
			<?php
				$sql = "SELECT * FROM posts";
				$sql = $pdo->query($sql);
				if($sql->rowCount() > 0) {
					foreach ($sql->fetchAll() as $post) {
						echo "<tr>";
						echo "<td>".$post['title']."</td>";
						echo "<td>".$post['creation_date']."</td>";
						echo "<td>".$post['post_body']."</td>";
						echo "<td>".$post['author']."</td>";
						echo '<td><a href="edit.php?id='.$post['id'].'" class="btn btn-info">Edit</a> <a href="delete.php?id='.$post['id'].'" class="btn btn-danger">Delete</a></td>';
						echo "</tr>";
					}
				} else {
					echo "There are no posts to show.";
				}
			?>
		</table>
	</body>
</html>