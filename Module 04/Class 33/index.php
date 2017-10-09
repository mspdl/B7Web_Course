<?php 

/* condition not recommended
if(isset($_POST['email']) && $_POST['email'] != ""){
*/

/* condition ok, but not the simpler 
if(isset($_POST['email']) && empty($_POST['email']) == false){
*/

if(isset($_POST['email']) && !empty($_POST['email'])){	
	if (isset($_POST['password']) && !empty($_POST['password'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		echo "Email reported: ".$email.'<br>';
		echo "Password reported: ".$password.'<br>';
		echo "<hr>";
	}
}

?>

<form method="POST">
	E-mail:<br>
	<input type="text" name="email"><br><br>
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="Send"><br><br>
</form>