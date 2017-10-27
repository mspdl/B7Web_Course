<!DOCTYPE html>
<html>
	<head>
		<title>Class 08 - Text Manipulation</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>

		<?php
		
			echo "----- explode function sample beings -----<br>";
			$name = "Morgan Espindola da Silva Sauro";

			echo "name: ".$name."<br>";

			$x = explode(" ", $name);
			foreach ($x as $values) {
				echo $values."<br>";
			}
			echo "----- explode function sample ends -----<br><br>";


			echo "----- implode function sample begins -----<br>";
			$name = array("Morgan", "Espindola", "Sauro");
			echo "name: ".$name[0]."<br>";
			echo "lastName: ".$name[1]."<br>";

			echo implode(" ",$name)."<br>";

			echo "----- implode function sample ends -----<br><br>";

			echo "number_format function:<br>";
			echo number_format(8711212.12312312, 3,",", ".")."<br><br>";

			echo "str_replace function:<br>";
			$text = "the rat had a hat and he read red ahead";
			echo "original text: ".$text."<br>";
			$string = str_replace("red", "blue", $text);
			echo "replaced text: ".$string."<br><br>";

			echo "strtolower function:<br>";
			$text2 = "MORGAN ESPINDOLA";
			echo "original text: ".$text2."<br>";
			$string2 = strtolower($text2);
			echo "replaced text: ".$string2."<br><br>";

			echo "strtoupper function:<br>";
			$text3 = "morgan espindola";
			echo "original text: ".$text3."<br>";
			$string3 = strtoupper($text3);
			echo "replaced text: ".$string3."<br><br>";

			echo "substr function (cut a part of a string):<br>";
			$text4 = "morgan espindola";
			echo "original text: ".$text4."<br>";
			$string4 = substr($text3, 0, 6);
			echo "replaced text: ".$string4."<br><br>";

			echo "ucfirst function (upper the first char of a string):<br>";
			$text5 = "morgan espindola";
			echo "original text: ".$text5."<br>";
			$string5 = ucfirst($text5);
			echo "replaced text: ".$string5."<br><br>";

			echo "ucwods function (upper the first char of each word of a string):<br>";
			$text6 = "morgan espindola";
			echo "original text: ".$text6."<br>";
			$string6 = ucwords($text6);
			echo "replaced text: ".$string6."<br><br>";
		
		?>

	</body>
</html>