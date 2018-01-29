<?php require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])){
	?>
	<script type="text/javascript">
		window.location.href='login.php';
	</script>
	<?php
	exit;
}
?>
		<div class="container">
			<h1>My Adverts</h1>

			<a href="add-advert.php" class="btn btn-default">Add Advert</a>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Photo</th>
						<th>Title</th>
						<th>Value</th>
						<th>Actions</th>
					</tr>
				</thead>
				<?php 
				require 'classes/adverts.class.php';
				$a = new Adverts();
				$adverts = $a->getMyAdverts();
				foreach ($adverts as $advert): ?>
				<tr>
					<td><img src="assets/img/adverts/<?php echo $advert['url']; ?>" border="0"></td>
					<td><?php echo $advert['title']; ?></td>
					<td><?php echo number_format($advert['value'], 2); ?></td>
					<td></td>
				</tr>
				<?php endforeach; ?>
			</table>

		</div>
<?php require 'pages/footer.php'; ?>