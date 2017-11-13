<?php

	$file = "image.jpg";

	$max_width = 200;
	$max_height = 200;

	list($original_width, $original_height) = getimagesize($file);

	$ratio = $original_width / $original_height;

	if ($max_width/$max_height > $ratio) {
		$max_width = $max_width * $ratio;
	} else {
		$max_height = $max_height / $ratio;
	}

	$original_image = imagecreatefromjpeg($file);

	$final_image = imagecreatetruecolor($max_width, $max_height);

	imagecopyresampled($final_image, $original_image, 
		0, 0, 0, 0, 
		$max_width, $max_height, $original_width, $original_height);

	// header("Content-Type: image/png"); -> it'll open the page like a image
	imagejpeg($final_image, "small-image.jpg", 100);


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Class 03 - Resizing and cropping images</title>
	</head>
	<body>
		<?php 
			echo "<h3>Image  resized successfully.</h3>";
		?>
	</body>
</html>