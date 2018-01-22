<?php

	list($original_width, $original_height) = getimagesize("image.jpg"); // get the size of the image.jpg
	list($mini_width, $mini_height) = getimagesize("small-image.jpg"); // get the size of the mini-image.jpg
	$final_image = imagecreatetruecolor($original_width, $original_height);

	$original_image = imagecreatefromjpeg("image.jpg");
	$mini_image = imagecreatefromjpeg("small-image.jpg");

	imagecopy($final_image, $original_image, 0, 0, 0, 0, $original_width, $original_height);
	imagecopy($final_image, $mini_image, 100, 100, 0, 0, $mini_width, $mini_height);

	imagejpeg($final_image, "image_with_water_mark.jpg", 100);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Class 04 - Manipulating Images with GD</title>
	</head>
	<body>
		<?php echo "<h3>Image with Water Mark created successfully.</h3>"; ?>
	</body>
</html>