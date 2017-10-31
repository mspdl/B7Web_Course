<?php

$file = $_FILES['file'];

// get the temp file and move it to a server folder
if (isset($file['tmp_name']) && empty($file['tmp_name']) == false) {

	// if a file with the same name is send, it'll be replaced, so we need to create a function to create a random name like this
	$filename = new SplFileInfo($file['name']); // get the name of the file sent
	$extension = $filename->getExtension(); // get the extesion of the file sent
	$newfilename = md5(time().rand(0,99)).'.'.$extension; // create a random name and concatenate with the extension of the file sent
	move_uploaded_file($file['tmp_name'], 'files/'.$newfilename); // move the file sent to the folder "files" withe the new name and the same extesion

	echo "File sent successfully.";
}


?>