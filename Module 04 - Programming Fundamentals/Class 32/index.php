<?php 

$name = "Morgan";
$age = 27;


echo '<strong>Name: '.$name.'<br>Age: '.$age.'<br><br></strong>';
echo 'name == Morgan && age == 27<br>';
if($name == "Morgan" && $age == 27) {
	echo 'My name and my age are right!';
}else {
	echo 'My name or my age are wrong!';
}
echo '<br><br>';

echo 'name == Morgan || age == 27<br>';
if ($name == "Morgan" || $age == 27) {
	echo "My name or my age is correct!";
}else {
	echo "My name and my age are both wrong!";
}
echo '<br><br>';

echo 'name == Morgan && name == Freeman<br>'; 
if ($name == "Morgan" && $name == "Freeman") { // if the same variable is using the &&, the value is always false, independent of one condition is true or not, both must to be true
	echo "My name is correct!";
}else {
	echo "My name is wrong!";
}
echo '<br><br>';

?>