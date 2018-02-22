<?php
class productController extends controller {

	public function index() {

	}

	public function open($id) {
		$data = array();

		$a = new Adverts();
		$u = new Users();

		if(empty($id)) {
			header("Location: ".BASE_URL);
			exit;
		}

		$info = $a->getAdvert($id);

		$data['info'] = $info;

		$this->loadTemplate('product', $data);
	}
}