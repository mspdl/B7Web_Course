<?php
class homeController extends controller {
	
	public function index() {
		$data = array(
			'qtd' => 5,
			'name' => 'Morgan',
			'age' => 28
		);
		$this->loadTemplate('home', $data);
	}

}