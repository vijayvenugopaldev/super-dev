<?php
include("connect.php");
$name=$_POST["name"];
$colleges=mysqli_query($con,"SELECT `college` FROM `payment` WHERE `name` ='$name'");
?>

<?php
	while($college=mysqli_fetch_assoc($colleges)) {
?>
	<option ><?php echo $college["college"]; ?></option>
<?php
	
}
?>