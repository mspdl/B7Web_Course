<?php

class Database {

	private $pdo;
	private $numRows;
	private $array;

	public function __construct($host, $dbname, $dbuser, $dbpass) {
		try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
		} catch (PDOException $e) {
			echo "Failed : ".$e->getMessage();	
		}
	}

	public function query($sql) {
		$query = $this->pdo->query($sql);
		$this->numRows = $query->rowCount();
		$this->array = $query->fetchAll();
	}

	public function result() {
		return $this->array;
	}

	public function insert($table, $data) {
		if (!empty($table) && ( is_array($data) && count($data) > 0) ) {
			$sql = "INSERT INTO ".$table." SET ";
			$array_data = array();
			foreach ($data as $key => $value) {
				$array_data[] = $key." = '".addslashes($value)."'";
			}

			$sql = $sql.implode(", ", $array_data);

			$this->pdo->query($sql);

		}
	}

	public function update($table, $data, $where = array(), $where_cond = "AND") {
		if(!empty($table) && (is_array($data) && count($data) > 0) && is_array($where)) {
			$sql = "UPDATE ".$table." SET ";
			$array_data = array();
			foreach ($data as $key => $value) {
				$array_data[] = $key." = '".addslashes($value)."'";
			}
			$sql = $sql.implode(", ", $array_data);

			if (count($where) > 0) {
				$array_data = array();
				foreach ($where as $key => $value) {
					$array_data[] = $key." = '".addslashes($value)."'";
					$sql = $sql." WHERE ".implode(" ".$where_cond." ", $array_data);
				}
			}

			$this->pdo->query($sql);
			echo "Updated sucessfully.";
		}
	}

	public function delete($table, $where, $where_cond = "AND") {
		if(!empty($table) && (is_array($where) && count($where) > 0)) {

			$sql = "DELETE FROM ".$table;

			if (count($where) > 0) {
				$array_data = array();
				foreach ($where as $key => $value) {
					$array_data[] = $key." = '".addslashes($value)."'";
					$sql = $sql." WHERE ".implode(" ".$where_cond." ", $array_data);
				}
			}

			$this->pdo->query($sql);

			echo "Deleted sucessfully";
		}

	}

	public function getNumRows() {
		return $this->numRows;
	}

}

?>