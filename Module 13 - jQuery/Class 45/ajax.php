<?php 

$user = $_POST['user'];
$password = $_POST['password'];

$array = array('status'=>'');
if($user == 'm.spdl@live.com' && $password == '123') {
	$array['status'] = 'ok';
}

echo json_encode($array);

?>