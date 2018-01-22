<?php 
require 'config.php';
require 'classes/votes.class.php';


if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['note']) && !empty($_GET['note'])) {
	$id_movie = intval(addslashes($_GET['id']));
	$note = intval(addslashes($_GET['note']));

	$votes = new Votes($pdo);
	if($votes->toVote($id_movie, $note)) {
		header("Location: index.php");
		exit;
	} else {
		echo "Something is wrong.";
	}
} else {
	header("Location: index.php");
	exit;
}