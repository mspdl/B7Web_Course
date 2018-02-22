<?php 
class Adverts extends model {

	public function getQuantity() {
		$sql = "SELECT COUNT(*) as c FROM adverts";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			return $sql['c'];
		} else {
			return 0;
		}

	}

}