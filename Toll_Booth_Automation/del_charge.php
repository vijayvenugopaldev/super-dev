<!DOCTYPE html>
<body>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Toll Booth Automation</title>
	<script src="jquery-1.11.3.js"></script>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-basic.css">
	<script type="text/javascript">
function getChargeDetails(val) {
	$.ajax({
	type: "POST",
	url: "get_charge_details.php",
	data:'id='+val,
	success: function(data){
		
         var dat= jQuery.parseJSON(data);
			$('#vh').val(dat.vehicle);
			$('#am').val(dat.amount);
		
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
$charges=mysqli_query($con,"SELECT distinct `id` FROM `charges`");

?>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post">

            <div class="form-title-row">
                <h1>Edit Charges</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>ID</span>
                   <?php
					echo '<select name="id" id="id" onChange="getChargeDetails(this.value);">';
					echo '<option value="">Choose the Batch</option>';
					while($rowb = mysqli_fetch_assoc($charges)){
						echo "<option>{$rowb['id']}</option>";
					}
					echo '</select>';
					?>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Vehicle</span>
                    <input type="vehicle" name="vehicle" id="vh" required>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Amount</span>
                    <input type="text" name="amount" id="am" required/>
                </label>
            </div>
           

            
            <div class="form-row">
                <button type="submit" name="sub">Delete</button>
                
            </div>

        </form>
<?php
	if(isset($_REQUEST["sub"]))
	{
	include("connect.php");
	$id=$_REQUEST["id"];
	
	
	
	
	mysqli_query($con,"DELETE FROM `charges` WHERE id='$id'");
		 header("Location:del_charge.php");
	}
	?>
    </div>

</body>

</html>
