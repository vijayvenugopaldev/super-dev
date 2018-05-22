<?php
include("connect.php");

	$query ="SELECT DISTINCT `time` FROM `tollcorruption` WHERE date= '" . $_POST["dates"] . "'";
	$results = mysqli_query($con,$query);
	
?>
	<option value="">Choose the Time</option>
<?php
	while($times=mysqli_fetch_assoc($results)) {
?>
	<option ><?php echo $times["time"]; ?></option>
<?php
	
}
?>