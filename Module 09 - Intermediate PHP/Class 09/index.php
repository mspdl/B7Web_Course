<!DOCTYPE html>
<html>
	<head>
		<title>Class 09 - Array Manipulation</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<?php

			$array = array(
				"name" => "Morgan",
				"age" => 27,
				"city" => "Palhoça",
				"country" => "Brasil"
			);

			$array2 = array_keys($array);
			echo "<h3>array_keys function</h3>";
			echo "<small>array_keys returns an array of the keys of an array</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array);
			echo "<br>";
			echo "<b>Array keys of Default Array:</b><br>";
			print_r($array2);
			echo "<br>";

			$array3 = array_values($array);
			echo "<h3><br>array_values function sample</h3>";
			echo "<small>array_values returns an array of the values of an array</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array);
			echo "<br>";
			echo "<b>Array values of Default Array:</b><br>";
			print_r($array3);

			$array4 = $array;
			echo "<h3><br>array_pop function sample</h3>";
			echo "<small>array_pop removes the last element of an array</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array4);
			echo "<br>";
			echo "<b>Default Array after using array_pop:</b><br>";
			array_pop($array4);
			print_r($array4);

			$array5 = $array;
			echo "<h3><br>array_shift function sample</h3>";
			echo "<small>array_shift removes the first element of an array</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array5);
			echo "<br>";
			echo "<b>Default Array after using array_shift:</b><br>";
			array_shift($array5);
			print_r($array5);

			echo "<h3><br>asort function sample</h3>";
			echo "<small>asort sort the elements of an array by its values increasingly</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array);
			echo "<br>";
			echo "<b>Default Array after using asort:</b><br>";
			asort($array);
			print_r($array);

			echo "<h3><br>arsort function sample</h3>";
			echo "<small>arsort sort the elements of an array by its values decreasingly</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array);
			echo "<br>";
			echo "<b>Default Array after using arsort:</b><br>";
			arsort($array);
			print_r($array);

			echo "<h3><br>count function sample</h3>";
			echo "<small>count function returns the size of an array</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array);
			echo "<br>";
			echo "<b>Default Array size: </b>".count($array)."<br>";

			echo "<h3><br>in_array function sample</h3>";
			echo "<small>in_array function search a value in an array values and returns 1 if it's true</small><br>";
			echo "<b>Default array:<br></b>";
			print_r($array);
			echo "<br>";
			echo "<b>in_array -Morgan- search on Default Array: </b>".in_array("Morgan", $array)."<br>";
			echo "<b>in_array -city- search on Default Array: </b>".in_array("city", $array)."<br>";
		
		?>

	</body>
</html> 