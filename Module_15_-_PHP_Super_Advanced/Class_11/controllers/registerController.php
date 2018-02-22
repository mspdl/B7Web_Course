<?php 
$u = new Users();
if(
(isset($_POST['name']) && !empty($_POST['name'])) ||
(isset($_POST['email']) && !empty($_POST['email'])) ||
(isset($_POST['password']) && !empty($_POST['password']))
){
	$name = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$password = $_POST['name'];
	$phone = addslashes($_POST['phone']);

	if (!empty($name) && !empty($email) && !empty($password)) {
		if($u->register($name, $email, $password, $phone)) { 
			?>
			<div class="alert alert-success">
				<strong>Congratulations!</strong> User registered successfully! <a href="login.php">Login now.</a>
			</div>
			<?php
		} else {
			?>
			<div class="alert alert-warning">
				User already registered. <a href="login.php">Login now.</a>
			</div>
			<?php
		}
	} else {
		?>
		<div class="alert alert-warning">
			Fill in all the fields.
		</div>
		<?php
	}
}
?>