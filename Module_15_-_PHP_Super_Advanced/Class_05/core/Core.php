<?php 
class Core {

	public function run() {

		$url = '/';

		if(isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		if(!empty($url) && $url != '/') {
			$url = explode('/', $url);

			array_shift($url); // remove the first element of the array, in this case: the blank value of the first bar
			$currentController = $url[0].'Controller';
			array_shift($url);

			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
			} else {
				$currentAction = 'index';
			}

			print_r($url);echo "<hr>";
		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		echo "CONTROLLER: ".$currentController."<br>";
		echo "ACTION: ".$currentAction."<br>";

	}

}