<?php 

class Adverts {


	public function getMyAdverts() {
		global $pdo;

		$array = array();
		$sql = $pdo->prepare("SELECT *, (SELECT adverts_images.url FROM adverts_images WHERE adverts_images.id_advert = adverts.id LIMIT 1) as url FROM adverts WHERE id_user = ?");
		$sql->execute(array($_SESSION['cLogin']));

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


	public function addAdvert($title, $category, $value, $description, $status) {
		global $pdo;

		$sql = $pdo->prepare("INSERT INTO adverts (title, id_category, id_user, description, value, status) VALUES (?, ?, ?, ?, ?, ?)");
		$sql->execute(array($title, $category, $_SESSION['cLogin'], $description, $value, $status));
	}


}

?>