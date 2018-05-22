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
                <h1>Add Nonpayer</h1>
            </div>

            <div class="form-row">
                <label>
                    <span> Date </span>
                    <input type="date" name="dt" id="dt">
                </label>
            </div>

             <div class="form-row">
                <label>
                    <span> Time </span>
                    <input type="time" name="tm" id="tm">
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
	$dt=$_REQUEST["dt"];
	$tm=$_REQUEST["tm"];
	
	
	
	mysqli_query($con,"INSERT INTO `tollcorruption`(`date`, `time`) VALUES ('$dt','$tm')");
		 header("Location:add_nonpayer.php");
	}
	?>
    </div>

</body>

</html>
