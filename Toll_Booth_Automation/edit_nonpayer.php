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
function getDate(val) {
	$.ajax({
	type: "POST",
	url: "get_date.php",
	data:'dates='+val,
	success: function(data){
		$("#tm").html(data);
	}
	});
}
		function getData(val) {
	$.ajax({
	type: "POST",
	url: "get_data.php",
	data:{'time':val,'date':$('#dt').val()},
	success: function(data){
		
         var dat= jQuery.parseJSON(data);
			$('#rfid').val(dat.rfid);
			$('#regno').val(dat.regno);
			$('#name').val(dat.uname);
			$('#amount').val(dat.amount);
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
$dates=mysqli_query($con,"SELECT DISTINCT `date` FROM `tollcorruption`");

?>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post">

            <div class="form-title-row">
                <h1>Edit Nonpayers</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Date</span>
                   <?php
					echo '<select name="dt" id="dt" onChange="getDate(this.value);">';
					echo '<option value="">Choose the Date</option>';
					while($rowb = mysqli_fetch_assoc($dates)){
						echo "<option>{$rowb['date']}</option>";
					}
					echo '</select>';
					?>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Time</span>
                    <select name="time" id="tm" onChange="getData(this.value)">
					<option>Choose the Time</option>
				</select>
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Rfid</span>
                    <input type="text" name="rfid" id="rfid" required>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Reg No.</span>
                    <input type="text" name="regno" id="regno" required/>
                </label>
            </div>
           
 			<div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" name="name" id="name" required/>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Amount</span>
                    <input type="text" name="amount" id="amount" required/>
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
	$date=$_REQUEST["dt"];
	$time=$_REQUEST["time"];
	$rfid=$_REQUEST["rfid"];
	$regno=$_REQUEST["regno"];
	$name=$_REQUEST["name"];
	$amount=$_REQUEST["amount"];
	
	
	mysqli_query($con,"UPDATE `tollcorruption` SET `rfid`='$rfid',`regno`='$regno',`uname`='$name',`amount`='$amount' WHERE date='$date' AND time='$time'");
		 header("Location:edit_nonpayer.php");
	}
	?>
    </div>

</body>

</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>