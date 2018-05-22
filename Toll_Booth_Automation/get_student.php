<?php
include("connect.php");
$college=$_POST["college"];
$students=mysqli_query($con,"SELECT `name` FROM `payment` WHERE `college`='$college'");
?>
<option value="">Select Student</option>
<?php
	while($student=mysqli_fetch_assoc($students)) {
?>
	<option ><?php echo $student["name"]; ?></option>
<?php
	
}
?>