<!DOCTYPE html>
<html>
	<head>
		<title>Class 03 - FOREACH</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
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