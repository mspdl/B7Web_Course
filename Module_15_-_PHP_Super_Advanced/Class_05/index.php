<?php 
session_start();
require 'config.php';

spl_autoload_register(function($class){
	if(file_exists('controllers/'.$class.'.php')){
		require 'controllers/'.$class.'.php';
	} 
	else if(file_exists('models/'.$class.'.php')){
		require 'models/'.$class.'.php';
	} 
	else if(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 05 - MV Structure: Autoload + Core (1/2)</title>
	</head>
	<body>

	</body>
</html>