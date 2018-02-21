<?php
class galleryController extends controller {


	public function index() {
		$data = array(
			'qtd' => 34
		);
		$this->loadTemplate('gallery', $data);
	}


}