

<!DOCTYPE html>
<html>
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
<form class="form-basic" method="post">
        <!-- You only need this form and the form-basic.css -->
<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "rfid");
$output = '';
$query = "SELECT * FROM `vehicles`";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h1 align="center">Toll Rate</h1><br><br>
<table>
<thead>
 <tr>
   <th>ID</th>
      <th>Name</th>
      <th>Address</th>
	  <th>Email</th>
	   <th>Mobile</th>
	    <th>Registration</th>
		<th>Vehicle</th>
 </tr>
 <thead>
 <tbody>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td data-title="ID">'.$row["rfidcode"].'</td>
  <td data-title="Name">'.$row["username"].'</td>
  <td data-title="Address">'.$row["address"].'</td>
  <td data-title="Email">'.$row["email"].'</td>
  <td data-title="Mobile">'.$row["mob"].'</td>
  <td data-title="Registration">'.$row["registration"].'</td>
  <td data-title="Vehicle">'.$row["vehicle"].'</td>
  
  
 </tr></tbody>
 ';
}
$output .= '</table>';
echo $output;
?>
	 
	
		</form>     
    </div>

	
</body>

</html>
