<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = $_POST['email'];
	echo "Email sent: ".$email;
}else {
	echo "email not informed!";
}

?>