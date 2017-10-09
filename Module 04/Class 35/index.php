<!-- first way to do
<form method="POST" action="receiver.php">
-->
<?php 
// second way to do
require "receiver.php"; // include can be used too or require_once, this require just one time

?>
<form method="POST">
	E-mail:<br>
	<input type="text" name="email"><br>
	<input type="submit" value="Send">
</form>