<?php

class Language {

	private $l;
	private $ini;
	private $db;

	public function __construct() {
		$this->l = 'en';

		if(!empty($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')) {
			$this->l = $_SESSION['lang'];
		}

		$this->ini = parse_ini_file('lang/'.$this->l.'.ini');

		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM lang WHERE lang = ?");
		$sql->execute(array($this->l));

		if($sql->rowCount() > 0){
			foreach ($sql->fetchAll() as $item) {
				$this->db[$item['name']] = $item['value'];
			}
		}
	}


	public function getLanguage() {
		return $this->l;
	}

	public function languegeDefined() {
		switch ($this->l) {
			case "en":
				return "Defined Language: English";
				break;
			case "pt-br":
				return "Linguagem Definida: Português";
				break;
			case "es":
				return "Lenguaje Definido: Español";
		}
	}

	public function get($word, $return = false) {
		$text = $word;

		if(isset($this->ini[$word])){
			$text = $this->ini[$word];
		} elseif (isset($this->db[$word])) {
			$text = $this->db[$word];
		}

		if($return) {
			return $text;
		} else {
			echo $text;
		}
	}

}