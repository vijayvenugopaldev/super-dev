<?php
include("connect.php");
$charges=mysqli_query($con,"SELECT `vehicle`, `amount` FROM `charges` WHERE id= '" . $_POST["id"] . "'");
?>

<?php
	while($charge=mysqli_fetch_assoc($charges)) {
	$data = array(
            "vehicle" => $charge['vehicle'],
            "amount"  => $charge['amount']
        );
        echo json_encode($data);
		
?>
	 
<?php


}
?>