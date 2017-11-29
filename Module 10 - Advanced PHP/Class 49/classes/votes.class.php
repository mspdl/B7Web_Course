<?php 

class Votes {

	private $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function toVote($id_movie, $note) {
		if ($note <= 5 && $note >= 1) {
			$sql = $this->pdo->prepare("INSERT INTO votes (id_movie, note) VALUES (?, ?)");

			if($sql->execute(array($id_movie, $note))) {
				$sql = $this->pdo->prepare("UPDATE movies SET average = (SELECT (SUM(note)/COUNT(*)) FROM votes WHERE votes.id_movie = movies.id) WHERE id = ?");
				if ($sql->execute(array($id_movie))) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}

?>