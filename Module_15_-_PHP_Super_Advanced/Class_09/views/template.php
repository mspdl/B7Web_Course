
<!DOCTYPE html>
<html>
	<head>
		<title>Class 09 - MVC Structure: Views</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>
	</head>
	<body>
		<h1>This is the head</h1>
		<a href="<?php echo BASE_URL ?>">Home</a>
		<a href="<?php echo BASE_URL ?>gallery">Gallery</a>
		<hr>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</body>
</html>