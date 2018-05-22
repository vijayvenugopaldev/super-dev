<!DOCTYPE html>
<body>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Toll Booth Automation</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-basic.css">
	<script src="jquery-1.11.3.js"></script>
<script type="text/javascript">
function getVehicleDetails(val) {
	$.ajax({
	type: "POST",
	url: "get_vehicle_details.php",
	data:'id='+val,
	success: function(data){
		
         var dat= jQuery.parseJSON(data);
			$('#name').val(dat.username);
			$('#add').val(dat.address);
			$('#email').val(dat.email);
			$('#mob').val(dat.mob);
			$('#reg').val(dat.registration);
			$('#vh').val(dat.vehicle);
		
	}
	});
}
</script>
</head>


	
	<header>
		<h1><img width="80" height="80" src="toll-booth.png"></h1><h1>Toll Booth Automation System</h1>
        <!--<br/><a href="#">Events</a>-->
    </header>
<?php
include("connect.php");
$vehicles=mysqli_query($con,"SELECT distinct `rfidcode` FROM `vehicles`");

?>

    


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post">

            <div class="form-title-row">
                <h1>Edit Vehicle Details</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Rfid Code</span>
                     <?php
					echo '<select name="rfid" id="rfid" onChange="getVehicleDetails(this.value);">';
					echo '<option value="">Choose the ID</option>';
					while($rowb = mysqli_fetch_assoc($vehicles)){
						echo "<option>{$rowb['rfidcode']}</option>";
					}
					echo '</select>';
					?>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name" id="name" required>
                </label>
            </div>

           
            <div class="form-row">
                <label>
                    <span>Mobile</span>
                    <input type="text" name="mno" pattern="[7-9]{1}[0-9]{9}" id="mob" required/>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" id="email" required>
                </label>
            </div>
			
            <div class="form-row">
                <label>
                    <span>Vehicle Type</span>
                    <select name="vehicle" id="vh">
                        <option>Car</option>
                        <option>Bus</option>
                        <option>Bike</option>
                        <option>Scooter</option>
                        <option>Lorry</option>
                        <option>Auto Rikshaw</option>
                        <option>Van</option>
                        <option>Others</option>
                    </select>
                </label>
            </div>
             
			<div class="form-row">
                <label>
                    <span>Registration No.</span>
                    <input type="text"  name="regno" id="reg" required>
                </label>
            </div>
           
           <div class="form-row">
                <label>
                    <span>Address</span>
					<textarea name="address" id="add"></textarea>
                </label>
            </div>
           

            
            <div class="form-row">
                <button type="submit" name="sub">Save</button>
                
            </div>

        </form>
<?php
	if(isset($_REQUEST["sub"]))
	{
	include("connect.php");
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$mob=$_REQUEST["mno"];
	$rfid=$_REQUEST["rfid"];
	$vehicle=$_REQUEST["vehicle"];
	$regno=$_REQUEST["regno"];
	$address=$_REQUEST["address"];
	
	
	mysqli_query($con,"UPDATE `vehicles` SET `username`='$name',`address`='$address',`email`='$email',`mob`='$mob',`registration`='$regno',`vehicle`='$vehicle' WHERE rfidcode='$rfid'");
		 header("Location:edit_vehicle.php");
	}
	?>
    </div>

</body>

</html>
