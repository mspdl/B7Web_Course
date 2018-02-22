<?php
class homeController extends controller {
	
	public function index() {

		$data = array();

		$a = new Adverts();
		$u = new Users();
		$c = new Categories();

		$filters = array(
			'category' => '',
			'value' => '',
			'status' => ''
		);
		if(isset($_GET['filters'])) {
			$filters = $_GET['filters'];
		}

		$total_adverts = $a->getTotalAdverts($filters);
		$total_users = $u->getTotalUsers();

		$p = 1;
		if(isset($_GET['p']) && !empty($_GET['p'])) {
			$p = addslashes($_GET['p']);
		}

		$perPage = 2;
		$total_pages = ceil($total_adverts/$perPage);

		$adverts = $a->getLastAdverts($p, $perPage, $filters);
		$categories = $c->getList();

		$data['total_adverts'] = $total_adverts;
		$data['total_users'] = $total_users;
		$data['total_pages'] = $total_pages;
		$data['categories'] = $categories;
		$data['filters'] = $filters;
		$data['adverts'] = $adverts;
		$data['p'] = $p;
		
		$this->loadTemplate('home', $data);
	}

}