<?php 

class Adverts {


	public function getMyAdverts() {

		global $pdo;

		$array = array();
		$sql = $pdo->prepare("SELECT *, (SELECT adverts_image.url FROM adverts_images WHERE adverts_imagens.id_advert = advert.id LIMIT 1) as url FROM adverts WHERE id_user = ?");
		$sql->execute(array($_SESSION['cLogin']));

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;


	}


}

?>