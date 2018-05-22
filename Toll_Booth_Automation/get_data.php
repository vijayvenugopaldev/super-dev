<?php
include("connect.php");
$charges=mysqli_query($con,"SELECT * FROM `tollcorruption` WHERE date= '" . $_POST["date"] . "' AND
time='" . $_POST["time"] . "'");
?>

<?php
	while($charge=mysqli_fetch_assoc($charges)) {
	$data = array(
            "rfid" => $charge['rfid'],
            "regno"  => $charge['regno'],
		 "uname"  => $charge['uname'],
		"amount"  => $charge['amount']
        );
        echo json_encode($data);
		
?>
	 
<?php


}
?>