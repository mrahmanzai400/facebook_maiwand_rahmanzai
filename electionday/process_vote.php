<?php
$url_obama = "http://i.cdn.turner.com/cnn/.e/img/3.0/election/2012/03_candidates/general/Obama_460x180.jpg";
$url_romney = "http://i.cdn.turner.com/cnn/.e/img/3.0/election/2012/03_candidates/general/Romney_460x180.jpg";
?>
<pre><?php print_r($_POST); ?></pre>
<?php 
$name = $_POST['name'];

$dob = $_POST['month'].'/'.$_POST['day'].'/'.$_POST['year'];

$last4 = substr($_POST['ssn'],5,4);

if($_POST['vote'] == 'obama') {
	$url = $url_obama;
} else {
	$url = $url_romney;
}

?>
<table>
	<tr>
		<th>Name</th>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<th>Date of Birth</th>
		<td><?php echo $dob; ?></td>
	</tr>
	<tr>
		<th>SSN</th>
		<td>xxx-xx-<?php echo $last4; ?></td>
	</tr>
	<tr>
		<th>Vote</th>
		<td><img src="<?php echo $url; ?>" alt="candidate photo"/></td>
	</tr>
	
</table>