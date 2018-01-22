<?php 
session_start();
require 'config.php';
require 'classes/user.class.php';
$newUser = new User($pdo);

// get users and its guests (generations choose by the limit)
$sql = $pdo->query("SELECT id FROM users");
$users = array();
if ($sql->rowCount() > 0) {
	$users = $sql->fetchAll();
	foreach ($users as $key => $user) {
		$users[$key]['guests'] = $newUser->updateUsers($user['id'], $limit);
	}
}

// get positions and UPDATE users' position
$sql = $pdo->query("SELECT * FROM positions ORDER BY min DESC");
$positions = array();
if ($sql->rowCount() > 0) {
	$positions = $sql->fetchAll();
}
foreach ($users as $user) {
	foreach ($positions as $position) {
		if (intval($user['guests']) >= intval($position['min'])) {
			$sql = $pdo->prepare("UPDATE users SET position = ? WHERE id = ?");
			$sql->execute(array($position['id'], $user['id']));
			break;
		}
	}
}

echo "<pre>";
print_r($users);
echo "</pre>";