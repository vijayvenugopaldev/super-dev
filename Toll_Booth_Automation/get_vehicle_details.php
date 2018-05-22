<?php
include("connect.php");
$vehicles=mysqli_query($con,"SELECT `rfidcode`, `username`, `address`, `email`, `mob`, `registration`, `vehicle` FROM `vehicles` WHERE rfidcode= '" . $_POST["id"] . "'");
?>

<?php
	while($vehicle=mysqli_fetch_assoc($vehicles)) {
	$data = array(
            "username" => $vehicle['username'],
            "address"  => $vehicle['address'],
			"email"  => $vehicle['email'],
			"mob"  => $vehicle['mob'],
			"registration"  => $vehicle['registration'],
			"vehicle"  => $vehicle['vehicle']
			
        );
        echo json_encode($data);
		
?>
	 
<?php


}
?>