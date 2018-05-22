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

    
 <?php
include("connect.php");
$charges=mysqli_query($con,"SELECT distinct `rfid` FROM `wallet`");

?>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post">

            <div class="form-title-row">
                <h1>Add Money</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>RFID</span>
                    <?php
					echo '<select name="rfid" id="rfid">';
					echo '<option value="">Choose the RFID</option>';
					while($rowb = mysqli_fetch_assoc($charges)){
						echo "<option>{$rowb['rfid']}</option>";
					}
					echo '</select>';
					?>
                </label>
            </div>

           
            <div class="form-row">
                <label>
                    <span>Amount</span>
                    <input type="text" name="amount" required/>
                </label>
            </div>
           

            
            <div class="form-row">
                <button type="submit" name="sub">Add</button>
                
            </div>

        </form>
<?php
	if(isset($_REQUEST["sub"]))
	{
	include("connect.php");
	$rfid=$_REQUEST["rfid"];
	$amount=$_REQUEST["amount"];
	
	
	
	mysqli_query($con,"UPDATE `wallet` SET `balance`=`balance`+'$amount' WHERE rfid='$rfid'");
		 header("Location:add_money.php");
	}
	?>
    </div>

</body>

</html>
