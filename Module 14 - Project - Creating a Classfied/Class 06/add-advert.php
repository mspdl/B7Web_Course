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
			<h1>Add new advert</h1>

			<form method="POST" enctype="multipart/form-data">

				<div class="form-group">
					<label for="category">Category</label>
					<select name="category" id="category" class="form-control">
						<?php 
						$c = new Categories();
						$categories = $c->getList();
						foreach ($categorias as $category) : ?>
						<option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
						<?php endforeach; ?>
							
						}
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control">
				</div>

				<div class="form-group">
					<label for="value">Value</label>
					<input type="text" name="value" id="value" class="form-control">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<input type="text" name="description" id="description" class="form-control">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description"></textarea>
				</div>

				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" id="status" class="form-control">
						<option value="0">Bad</option>
						<option value="1">Good</option>
						<option value="2">Excelent</option>
					</select>	
				</div>

				<input type="submit" value="add" class="btn btn-default">

			</form>

		</div>

<?php require 'pages/footer.php'; ?>