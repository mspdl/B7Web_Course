<?php
class homeController extends controller {
	
	public function index() {
		$adverts = new Adverts();
		$users = new Users();

		$data = array(
			'qtd' => $adverts->getQuantity(),
			'name' => $users->getName(),
			'age' => $users->getAge()
		);
		$this->loadTemplate('home', $data);
	}

}