<!DOCTYPE html>
<html>
	<head>
		<title>Class 14 - SQL Injection</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<?php 

			$author = addslashes($_POST["author"]); // addslasshes add bars before all quotation marks of a string parameter

			$sql = "SELECT * FROM posts WHERE author='$author'";

			$sql = "SELECT * FROM posts WHERE author='' or 1=1'"; // ' or 1=1

			$sql = "SELECT * FROM posts WHERE author='';DROP TABLE posts"; // ';DROP TABLE posts

		?>

	</body>
</html> 