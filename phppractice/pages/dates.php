<h2>Dates</h2>
<p>The PHP interpreter can be used to get the current date or aany other date you like.</p>
<?php 
// Get the current day day number
$currDay = date('j');

// Get the number of days in the current month
$numDays = date('t');

//calculate number days remaining in month
$daysleft = numDays - $currDay;
?>
<p>Today's date is 
	<?php  
	echo date('l, F j, Y, t');
	?>
</p>
<p>There are <?php echo $daysLeft;?> Days left in <?php echo date ('F');?></p>