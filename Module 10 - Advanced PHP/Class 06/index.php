<?php

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "name=Morgan&age=28&gender=male");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$answer = curl_exec($ch);
	curl_close($ch);
	print_r($answer);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 06 - cURL Library</title>
	</head>
	<body>

	</body>
</html>