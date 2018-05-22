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
                <h1>Wallet Section </h1>
            </div>
          
			 
				  <input type="submit" name="add_money" value="Add Money" style="background: #6caee0; color: white;font-weight: bold;"><br/><br/>
                
           
			
					<input type="submit" name="remove_money" value="Remove Money" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
               <input type="submit" name="view_bal" value="View Balance" style="background: #6caee0; color: white;font-weight: bold;"><br><br>
              
              
				
          
			</center>
        </form>
		
<?php
	
	if(isset($_REQUEST["add_money"])){
		 header("Location:add_money.php");
	}
		if(isset($_REQUEST["remove_money"])){
		 header("Location:remove_money.php");
	}
		if(isset($_REQUEST["view_bal"])){
		 header("Location:view_bal.php");
	}
		
		
	?>
    </div>

</body>

</html>
