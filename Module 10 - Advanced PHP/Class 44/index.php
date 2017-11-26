<?php 
require 'config.php'; 
require 'classes/cars.class.php';
require 'classes/booking.class.php';

$reserves = new Booking($pdo);
$cars = new Cars($pdo);

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Class 44 - Booking System</title>
	</head>
	<body>
		<h1>Reserves</h1>
		<?php  $list = $reserves->getReserves(); 
		foreach ($list as $item) {
			$start_br_date = date('d/m/Y', strtotime($item['start_date']));
			$end_br_date = date('d/m/Y', strtotime($item['end_date']));
			echo $item['person'].' booked the car '.$item['id_car'].' between '.$start_br_date. ' and '.$end_br_date.'<br>';
		}?>
	</body>
</html>