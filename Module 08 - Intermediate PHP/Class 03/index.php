<!DOCTYPE html>
<html>
	<head>
		<title>Class 03 - FOREACH</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<style type="text/css">
			* {
				padding: 5px;
			}
		</style>
	</head>
	<body>

		<?php

			$students = array(
				array("name"=>"Morgan", "age"=>"27"),
				array("name"=>"John", "age"=>"33"),
				array("name"=>"Marie", "age"=>"19"),
				array("name"=>"Paul", "age"=>"6"),
				array("name"=>"Katy", "age"=>"22"),
			);
			$i = 1;

			foreach ($students as $student) {
				echo "Student ".$i.": <strong>".$student["name"]."</strong>, is ".$student["age"]." years old.<br>";
				$i++;
			}
			echo "<br>";

			$people = array(
				"name" => "Morgan",
				"age" => 27,
				"state" => "SC",
				"country" => "Brasil"
			);

			foreach ($people as $person) {
				echo $person."<br>";
			}
			echo "<br>";

			foreach ($people as $key => $person) {
				echo $key." = ".$person."<br>";
			}

		?>

	</body>
</html>