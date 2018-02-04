<?php require 'pages/header.php'; ?>
<?php 
require 'classes/adverts.class.php';
require 'classes/users.class.php'; 
$a = new Adverts();
$u = new Users();

$total_adverts = $a->getTotalAdverts();
$total_users = $u->getTotalUsers();

$p = 1;
if(isset($_GET['p']) && !empty($_GET['p'])) {
	$p = addslashes($_GET['p']);
}

$perPage = 2;
$total_pages = ceil($total_adverts/$perPage);

$adverts = $a->getLastAdverts($p, $perPage);

?>

		<div class="container-fluid">
			<div class="jumbotron">
				<h2>We have <?php echo $total_adverts; ?> adverts today.</h2>
				<p>And more than <?php echo $total_users; ?> users registered.</p>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<h4>Advanced Search</h4>
				</div>
				<div class="col-sm-9">
					<h4>Last adverts</h4>
					<table class="table table-striped">
						<tbody>
							<?php foreach($adverts as $advert) : ?>
								<tr>
									<td>
										<?php if(!empty($advert['url'])) : ?>
										<img src="assets/img/adverts/<?php echo $advert['url']; ?>" border="0" height='50'>
										<?php else : ?>
											<img src="assets/img/default.png" height='50' border="0">
										<?php endif; ?>
									</td>
									<td>
										<a href="product.php?id=<?php echo $advert['id']; ?>"><?php echo $advert['title']; ?></a><br>
										<?php echo $advert['category']; ?>
									</td>
									<td>
										$ <?php echo number_format($advert['value'], 2); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<ul class="pagination">
						<?php for($i=1;$i<=$total_pages;$i++) : ?>
							<li class="<?php echo ($p==$i)?'active':'' ?>"><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>

<?php require 'pages/footer.php'; ?>