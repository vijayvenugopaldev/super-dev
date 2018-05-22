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
			<center>
			 <div class="form-title-row">
                <h1>Profile Section </h1>
            </div>
          
			 
				  <input type="submit" name="add_vehicle" value="Add Vehicle" style="background: #6caee0; color: white;font-weight: bold;"><br/><br/>
                
           
			
					<input type="submit" name="edit_vehicle" value="Edit Vehicle Details" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
               <input type="submit" name="view_vehicle" value="View Vehicles" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
               <input type="submit" name="del_vehicle" value="Delete Vehicle" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
				
          
			</center>
        </form>
		
<?php
	
	if(isset($_REQUEST["add_vehicle"])){
		 header("Location:reg_vehicles.php");
	}
		if(isset($_REQUEST["edit_vehicle"])){
		 header("Location:edit_vehicle.php");
	}
		if(isset($_REQUEST["view_vehicle"])){
		 header("Location:view_vehicle.php");
	}
		if(isset($_REQUEST["del_vehicle"])){
		 header("Location:del_vehicle.php");
	}
		
	?>
    </div>

</body>

</html>
