<!DOCTYPE html>
<html>
	<head>
		<title>Class 13 - How to insert/read/delete/change data</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<h3>INSERT:</h3>
		<p>
			INSERT INTO posts (title,creation_date,post_body,author) VALUES ("Test Title","2016-01-01 00:00:00","this is a test text","Morgan");
			<br>
			INSERT INTO posts (title,creation_date,post_body,author) VALUES ("Title 2","2016-01-02 00:00:00","another text","Morgan");
			<br>
			INSERT INTO posts (title,creation_date,post_body,author) VALUES ("Title 3","2016-11-12 12:45:23","another intern text","John");
			<br>
			<small>id doesn't need to be declared, because it's value is automatic</small>
		</p>

		<h3>SELECT:</h3>
		<p>
			SELECT * FROM posts;
			<br>
			SELECT title,post_body,author FROM posts;
			<br>
			SELECT title FROM posts;
			<br>
			SELECT * FROM posts WHERE author="Morgan";
			<br>
		</p>

		<h3>UPDATE:</h3>
		<p>
			UPDATE posts SET title="New Title 2" WHERE id=2;
			<br>
		</p>

		<h3>DELETE:</h3>
		<p>
			DELETE FROM posts WHERE id=2;
			<br>
		</p>

		

	</body>
</html> 