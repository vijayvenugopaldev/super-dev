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
                <h1>Add Charges</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>ID</span>
                    <input type="text" name="id" id="id" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Vehicle</span>
                    <input type="vehicle" name="vehicle" required>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Amount</span>
                    <input type="text" name="amount" required/>
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
	$id=$_REQUEST["id"];
	$vehicle=$_REQUEST["vehicle"];
	$amount=$_REQUEST["amount"];
	
	
	
	mysqli_query($con,"INSERT INTO `charges`(`id`, `vehicle`, `amount`) VALUES ('$id','$vehicle','$amount')");
		 header("Location:add_charge.php");
	}
	?>
    </div>

</body>

</html>
