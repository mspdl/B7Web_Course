<?php 

class Document {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getDocuments() {
		$documentList = array();
		$sql = $this->pdo->query("SELECT * FROM documents");

		if ($sql->rowCount() > 0) {
			$documentList = $sql->fetchAll();
		}
		return $documentList;
	}
} ?>