<?php

// without autoload
/*
require 'classes/Horse.php';
$h = new Horse();
$h->sound();

require 'classes/Person.php';
$p = new Person();
$p->walk();
*/

// with autoload
spl_autoload_register(function($class) {
	require 'classes/'.$class.'.php';
});

$h = new Horse();
$h->sound();

$p = new Person();
$p->walk();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 01 - Autoload</title>
	</head>
	<body>

	</body>
</html>