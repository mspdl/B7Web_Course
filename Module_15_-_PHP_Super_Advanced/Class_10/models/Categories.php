<?php 

class Categories extends model {


	public function getList() {
		$array = array();

		$sql = $this->db->query("SELECT * FROM categories");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}


}

?>