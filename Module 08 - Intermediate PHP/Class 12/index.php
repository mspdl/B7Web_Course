<!DOCTYPE html>
<html>
	<head>
		<title>Class 12 - Creating a database structure</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<h1>LOOK THE CODE OF THIS PAGE</h1>

		DATABASE
		- posts
			- id
			- title
			- creation date
			- post body
			- author

		CREATE TABLE `posts` (
			 `id` int(10) NOT NULL AUTO_INCREMENT,
			 `title` varchar(150) NOT NULL,
			 `creation_date` datetime NOT NULL,
			 `post_body` text NOT NULL,
			 `author` varchar(30) NOT NULL,
			 PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8;

	</body>
</html>