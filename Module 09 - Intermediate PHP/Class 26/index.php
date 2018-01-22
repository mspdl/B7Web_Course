<?php

	if (isset($_FILES['file'])) {

		if (count($_FILES['file']['tmp_name'])) {
			for($i = 0; $i < count($_FILES['file']['tmp_name']); $i++) {

				$filename = md5($_FILES['file']['name'][$i].time().rand(0,99)).'.jpg';

				move_uploaded_file($_FILES['file']['tmp_name'][$i], 'files/'.$filename);
			}
		}

		/*
		// Single file upload
		$name = $_FILES['file']['name']; // file.extesion

		// Multiple file upload
		$name = $_FILES['file']['name']; // array
		*/
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 26 - Multiple File Upload</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<form method="POST" enctype="multipart/form-data">
			Choose your files:<br>
			<input type="file" name="file[]" multiple><br><br>			

			<input type="submit" value="Send">
		</form>
	</body>
</html> 