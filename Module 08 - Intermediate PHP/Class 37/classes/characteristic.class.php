<?php 
 
 class Characteristic {

 	private $pdo;

 	public function __construct($pdo) {
 		$this->pdo = $pdo;
 	}

 	public function listCharacteristic(){
 		$characteristicsList = array();
		$sql = $this->pdo->query("SELECT characteristics FROM users");
		if ($sql->rowCount() > 0) {
			$characteristicsList = $sql->fetchAll();
			$char = array();
			foreach ($characteristicsList as $user) {
				$words = explode(",", $user['characteristics']);
				foreach ($words as $word) {
					$word = trim($word);
					if (isset($char[$word])) {
						$char[$word]++;
					} else {
						$char[$word] = 1;
					}
				}
			}
		}
		arsort($char);
		$words = array_keys($char);
		$counts = array_values($char);
		$bigger = max($counts);
		$sizes = array(11, 15, 20, 30);
		for($x=0;$x<count($words);$x++){
			$n = $counts[$x] / $bigger;
			$h = ceil($n * count($sizes));
			echo "<p style='font-size:".$sizes[$h-1]."'>".$words[$x]." (".$counts[$x].")</p>";
		}
 	}
 }

?>