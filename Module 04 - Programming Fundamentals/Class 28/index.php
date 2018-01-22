<?php 

$groups = array("Morgan", "Espindola"); // array with 2 strings
/* automatically php make this:
$groups = array(
	0 => "Morgan",
 	1 => "Espindola"
);
*/
echo $groups[0]."<br>";// outside = Morgan

$variable = array(
	"name" => "Morgan",
	"lasname" => "Espindola",
	"idade" => 27,
	"gender" => "male",
	"male" // it's equal to 0 => "male"
); // array with 4 keys with different values inside these keys
echo $variable["name"]."<br>"; // outside = Morgan

// change only one item of an array
$variable["name"] = "John";
$groups[0] = "Paul";
echo $variable["name"]."<br>";

// how to show the entire list
print_r($variable);
echo "<br>";
print_r($groups);
echo "<br>";

// array inside an array

$products = array(
	0 => array(
		"name" => "",
		"quantity" => "",
		"info" => ""
	),
	1 => array(
		"name" => "",
		"quantity" => "",
		"info" => ""
	)
);
// adding another item inside the products' array
$products[] = array(
	"name" => "",
	"quantity" => "",
	"info" => ""
);
// adding a string inside the products' array
$products[] = "Teste";

print_r($products);
echo "<br>";

?>