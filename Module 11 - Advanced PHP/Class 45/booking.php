<?php 
require 'config.php'; 
require 'classes/cars.class.php';
require 'classes/booking.class.php';

$booking = new Booking($pdo);
$cars = new Cars($pdo);

if (!empty($_POST['car'])) {
	$car = addslashes($_POST['car']);
	$start_date = explode('/', addslashes($_POST['start_date']));
	$end_date = explode('/', addslashes($_POST['end_date']));
	$person = addslashes($_POST['person']);

	// Converting the informed date (Brazil default) to database model
	$start_date = $start_date[2].'-'.$start_date[1].'-'.$start_date[0];
	$end_date = $end_date[2].'-'.$end_date[1].'-'.$end_date[0];

	if ($booking->checkAvailability($car, $start_date, $end_date)) {
		$booking->reserve($car, $start_date, $end_date, $person);
		header("Location: index.php");
		exit;
	} else {
		echo "This car is already booked on such period.";
	}
}
?>

<?php include 'header.html' ?>
		<h1>Adding Booking</h1>

		<form method="POST">
			Car:<br>
			<select name="car">
				<option></option>
				<?php $list = $cars->getCars();
				foreach ($list as $car) : ?>
				 	<option value="<?php echo $car['id']; ?>"><?php echo $car['name']; ?></option>
				 <?php endforeach ?>
			</select><br><br>

			Start date:<br>
			<input type="text" name="start_date"><br><br>

			End date:<br>
			<input type="text" name="end_date"><br><br>

			Person:<br>
			<input type="text" name="person"><br><br>

			<input type="submit" value="Book now">

		</form>

<?php include 'footer.html' ?>