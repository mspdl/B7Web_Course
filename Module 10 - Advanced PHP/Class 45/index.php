<?php 
require 'config.php'; 
require 'classes/booking.class.php';

$reserves = new Booking($pdo);
?>

<?php include 'header.html'; ?>

		<h1>Reserves</h1>
		<a href="booking.php">Add Booking</a>
		<hr>
		<?php  $list = $reserves->getReserves(); 
		foreach ($list as $item) {
			$start_br_date = date('d/m/Y', strtotime($item['start_date']));
			$end_br_date = date('d/m/Y', strtotime($item['end_date']));
			echo $item['person'].' booked the car '.$item['id_car'].' between '.$start_br_date. ' and '.$end_br_date.'<br>';
		}?>
		
<?php include 'footer.html' ?>