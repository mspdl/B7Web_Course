
<!DOCTYPE html>
<html>
	<head>
		<title>Class 08 - MVC Structure: Models</title>
	</head>
	<body>
		<h1>This is the head</h1>
		<a href="<?php echo BASE_URL ?>">Home</a>
		<a href="<?php echo BASE_URL ?>gallery">Gallery</a>
		<hr>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</body>
</html>