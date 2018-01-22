<?php

// 1 - first we need to change the file:
// 	...\wamp64\bin\apache\apache2.4.23\conf\httpd.conf
// 2 - find the line with "mod_rewrite"
// 	uncomment the line (remove the "#"), it'll be like that: LoadModule rewrite_module modules/mod_rewrite.so
// 3 - restart the apache
// 4 - create a file called only ".htaccess"
// 5 - insert into the file: 
// 	RewriteEngine On // It'll enable the rewrite on our project
// 	RewriteCond %{REQUEST_FILENAME} !-f // It'll ignore all access to real files on our project by url address
// 	RewriteCond %{REQUEST_FILENAME} !-d // It'll ignore all access to real directories on our project by url address
// 	RewriteRule ^(.*)$ /index.php?q=$1 [L] // create the rule to redirect the access

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 01 - Mod_rewrite</title>
	</head>
	<body>
		<?php print_r($_GET); ?>

	</body>
</html>