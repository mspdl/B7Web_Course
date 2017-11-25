<?php 
session_start();
header("Content-type: image/jpeg");

$n = $_SESSION['captcha'];

$image = imagecreate(100, 50);
imagecolorallocate($image, 200, 200, 200);

$fontcolor = imagecolorallocate($image, 20, 20, 20);
imagettftext($image, 40, 0, 22, 32, $fontcolor, 'Ginga.otf', $n);

imagejpeg($image, null, 100);

?>