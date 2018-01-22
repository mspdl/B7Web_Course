<?php

require "about1.php";
require "about2.php";

$about = new \application\v2\About();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 19 - Namespace</title>
	</head>
	<body>
		<?php echo "Version: ".$about->getVersion(); ?>
	</body>
</html>