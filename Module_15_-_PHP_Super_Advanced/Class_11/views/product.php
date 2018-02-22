<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<div class="carousel slide" data-ride="carousel" id="myCarousel">
				<div class="carousel-inner" role="listbox">
					<?php foreach($info['photos'] as $key => $photo) : ?>
					<div class="item <?php echo ($key=='0')?'active':''; ?>">
						<img src="<?php echo BASE_URL; ?>assets/img/adverts/<?php echo $photo['url']; ?>">
					</div>
					<?php endforeach; ?>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span><</span></a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span>></span></a>
			</div>
		</div>

		<div class="col-sm-8">
			<h1><?php echo $info['title']; ?></h1>
			<h4><?php echo $info['category']; ?></h4>
			<p><?php echo $info['description']; ?></p>
			<br><br>
			<h3>$ <?php echo number_format($info['value']); ?></h3>
			<h4>Phone: <?php echo $info['phone']; ?></h4>
		</div>

	</div>
</div>