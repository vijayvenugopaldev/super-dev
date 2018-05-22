<!DOCTYPE html>
<body>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Toll Booth Automation</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-basic.css">
	

</head>


	
	<header>
		<h1><img width="80" height="80" src="toll-booth.png"></h1><h1>Toll Booth Automation System</h1>
        <!--<br/><a href="#">Events</a>-->
    </header>

    


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post">

            <div class="form-title-row">
                <h1>Registration</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name" id="name" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Rfid Code</span>
                    <input type="rfid" name="rfid" required>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Mobile</span>
                    <input type="text" name="mno" pattern="[7-9]{1}[0-9]{9}" required/>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required>
                </label>
            </div>
			
            <div class="form-row">
                <label>
                    <span>Vehicle Type</span>
                    <select name="vehicle">
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
                    <input type="text"  name="regno" required>
                </label>
            </div>
           
           <div class="form-row">
                <label>
                    <span>Address</span>
					<textarea name="address"></textarea>
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
	
	
	mysqli_query($con,"INSERT INTO `vehicles`(`rfidcode`, `username`, `address`, `email`, `mob`, `registration`, `vehicle`) VALUES ('$rfid','$name','$address','$email','$mob','$regno','$vehicle')");
		 header("Location:reg_vehicles.php");
		mysqli_query($con,"INSERT INTO `wallet`(`rfid`, `username`, `balance`) VALUES ('$rfid','$name',0)");
		 header("Location:reg_vehicles.php");
	}
	?>
    </div>

</body>

</html>
