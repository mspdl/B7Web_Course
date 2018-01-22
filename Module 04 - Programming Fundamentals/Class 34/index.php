<?php 

$x = 1;

echo "<strong>x = $x</strong><br><br>";
// way 1 to use swtich
switch ($x) {
	case 0:
		echo "x = 0";
		break;
	case 1:
		echo "x = 1";
		break;
	case 2:
		echo "x = 2";
		break;
	default:
		echo "x = ?";
		break;
}
echo "<br>";

// way 2 to use switch
switch ($x) {
	case 0:
	case 1:
	case 2: 
		echo "x = 0, 1 or 2";
		break;
	default:
		echo "x = ?";
		break;
}
echo "<br>";

?>