<?php
include("connect.php");
$charges=mysqli_query($con,"SELECT `balance` FROM `wallet` WHERE `rfid`= '" . $_POST["id"] . "'");
?>

<?php
	while($charge=mysqli_fetch_assoc($charges)) {
	$data = array(
           
            "balance"  => $charge['balance']
        );
        echo json_encode($data);
		
?>
	 
<?php


}
?>