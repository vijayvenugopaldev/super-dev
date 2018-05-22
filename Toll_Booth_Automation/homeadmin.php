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
	session_start();
	$username=$_SESSION["username"];
	
	?>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post">
			<center>
			 <div class="form-title-row">
                <h1>Welcome <?php echo $username?> </h1>
            </div>
          
			 
				  <input type="submit" name="usr_profile" value="User Profiles" style="background: #6caee0; color: white;font-weight: bold;"><br/><br/>
                
           
			
					<input type="submit" name="add_charge" value="Add or Update Charges" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
               <input type="submit" name="view_toll" value="View Toll Collection" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
               
                <input type="submit" name="view_nonpayer" value="View Non Registered Users" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
				
          
			</center>
        </form>
		
<?php
	
	if(isset($_REQUEST["usr_profile"])){
		 header("Location:usr_profile.php");
	}
		if(isset($_REQUEST["add_charge"])){
		 header("Location:charge.php");
	}
		if(isset($_REQUEST["view_toll"])){
		 header("Location:view_toll.php");
	}
		if(isset($_REQUEST["view_nonpayer"])){
		 header("Location:view_nonpayer.php");
	}
	?>
    </div>

</body>

</html>
