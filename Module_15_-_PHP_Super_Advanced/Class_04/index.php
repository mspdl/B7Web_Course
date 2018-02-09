<?php 

if (isset($_GET['url']) && !empty($_GET['url'])) {
	echo "URL: ".$_GET['url'];
} else {
	echo "URL: home";
}

?>