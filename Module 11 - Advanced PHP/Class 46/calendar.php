<?php 

$date = "2017-01";
$first_day_month = date('w', strtotime($date));
$days = date('t', strtotime($date));
$weeks = ceil(($first_day_month + $days)/7);
$first_day_week = -$first_day_month;
$start_date = date('Y-m-d', strtotime($first_day_week. 'days', strtotime($date)));
$last_date = date('Y-m-d', strtotime((($first_day_week + ($weeks)*7)-1). 'days', strtotime($date)));

echo "First day of the month: ".$first_day_month."<br>";
echo "Month's days quantity: ".$days."<br>";
echo "Month's week quantity: ".$weeks."<br>";
echo "First day of the first week: ".$start_date."<br>";
echo "Last day of the last week: ".$last_date."<br>";
?>

<table border="1" width="100%">
	<tr>
		<th>Sun</th>
		<th>Mon</th>
		<th>Tue</th>
		<th>Wed</th>
		<th>Thu</th>
		<th>Fri</th>
		<th>Sat</th>
	</tr>
	<?php for($l=0;$l<$weeks;$l++) : ?>
		<tr>
			<?php for($i=0;$i<7;$i++) : ?>
				<?php 
				$w = date('d/m', strtotime(($i+($l*7)). 'days', strtotime($start_date))); ?>
				<td><?php echo $w; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>