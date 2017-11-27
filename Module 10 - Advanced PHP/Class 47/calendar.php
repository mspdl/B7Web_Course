<?php 

echo "First day of the month: ".$first_day_month."<br>";
echo "Month's days quantity: ".$total_days."<br>";
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
				$w = date('Y-m-d', strtotime(($i+($l*7)). 'days', strtotime($start_date))); ?>
				<td><?php 
				echo $w."<br><br>";
				foreach ($list as $item) {
					$bd_start = $item['start_date']; //bd = booking data
					$bd_end = $item['start_end'];
				}
				?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>