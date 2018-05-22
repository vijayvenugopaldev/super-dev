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
                <h1>Nonpayer Section </h1>
            </div>
          
			 
				  <input type="submit" name="add_nonpayer" value="Add Nonpayers" style="background: #6caee0; color: white;font-weight: bold;"><br/><br/>
                
           
			
					<input type="submit" name="edit_nonpayer" value="Edit Nonpayers" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
               <input type="submit" name="view_nonpayer" value="View Nonpayers" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
               <input type="submit" name="del_nonpayer" value="Delete Nonpayers" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
				
          
			</center>
        </form>
		
<?php
	
	if(isset($_REQUEST["add_nonpayer"])){
		 header("Location:add_nonpayer.php");
	}
		if(isset($_REQUEST["edit_nonpayer"])){
		 header("Location:edit_nonpayer.php");
	}
		if(isset($_REQUEST["view_nonpayer"])){
		 header("Location:view_nonpayer.php");
	}
		if(isset($_REQUEST["del_nonpayer"])){
		 header("Location:del_nonpayer.php");
	}
		
	?>
    </div>

</body>

</html>
