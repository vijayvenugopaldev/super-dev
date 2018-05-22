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
                <h1>Charge Section </h1>
            </div>
          
			 
				  <input type="submit" name="add_charge" value="Add Charges" style="background: #6caee0; color: white;font-weight: bold;"><br/><br/>
                
           
			
					<input type="submit" name="edit_charge" value="Edit Charges" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
               <input type="submit" name="view_charge" value="View Charges" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
               <input type="submit" name="del_charge" value="Delete Charges" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
				
          
			</center>
        </form>
		
<?php
	
	if(isset($_REQUEST["add_charge"])){
		 header("Location:add_charge.php");
	}
		if(isset($_REQUEST["edit_charge"])){
		 header("Location:edit_charge.php");
	}
		if(isset($_REQUEST["view_charge"])){
		 header("Location:view_charge.php");
	}
		if(isset($_REQUEST["del_charge"])){
		 header("Location:del_charge.php");
	}
		
	?>
    </div>

</body>

</html>
