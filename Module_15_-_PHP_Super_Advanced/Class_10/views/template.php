
<!DOCTYPE html>
<html>
	<head>
		<title>Class 10 - MVC Structure: Classifieds in MVC (1/2)</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">		
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		
	</head>
	<body>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="./" class="navbar-brand">Classified</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
						<li><a href="my-adverts.php">My adverts</a></li>
						<li><a href="logout.php">Logout</a></li>
					<?php else : ?>
						<li><a href="register.php">Register</a></li>
						<li><a href="login.php">Login</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>


		<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>
	</body>
</html>