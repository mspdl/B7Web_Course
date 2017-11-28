<?php 
require 'config.php'; 
require 'classes/booking.class.php';

$reserves = new Booking($pdo);
?>

<?php include 'header.html'; ?>

		<h1>Reserves</h1>
		<a href="booking.php">Add Booking</a><br>
		<br>
		<form method="GET">
			<select name="year">
				<?php for($y=date('Y');$y>date('Y')-5;$y--) : ?>
				<option><?php echo $y ?></option>
				<?php endfor; ?>
			</select>
			<select name="month">
				<?php for($m=1;$m<=12;$m++) : ?>
				<option><?php echo $m; ?></option>
				<?php endfor; ?>
			</select>
			<input type="submit" value="Show">
		</form>

		<?php 
			if (!empty($_GET['year'])) {
				$year = addslashes($_GET['year']);
				$month = addslashes($_GET['month']);
			} else {
				exit;
			}

		?>

		<?php  
		$date = $year."-".$month;
		$first_day_month = date('w', strtotime($date));
		$total_days = date('t', strtotime($date));
		$weeks = ceil(($first_day_month + $total_days)/7);
		$first_day_week = -$first_day_month;
		$start_date = date('Y-m-d', strtotime($first_day_week. 'days', strtotime($date)));
		$last_date = date('Y-m-d', strtotime((($first_day_week + ($weeks)*7)-1). 'days', strtotime($date)));

		$list = $reserves->getReserves($start_date, $last_date); 

		/*
		foreach ($list as $item) {
			$start_br_date = date('d/m/Y', strtotime($item['start_date']));
			$end_br_date = date('d/m/Y', strtotime($item['end_date']));
			echo $item['person'].' booked the car '.$item['id_car'].' between '.$start_br_date. ' and '.$end_br_date.'<br>';
		}
		*/?>

		<br/>
		<?php require 'calendar.php' ?>
		
<?php include 'footer.html' ?>