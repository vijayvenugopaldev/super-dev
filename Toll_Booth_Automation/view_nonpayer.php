

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
$query = "SELECT * FROM `tollcorruption`";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h1 align="center">Non Payers List</h1><br><br>
<table>
<thead>
 <tr>
   <th>ID</th>
      <th>Date</th>
      <th>Time</th>
	  <th>Rfid</th>
	  <th>Registration</th>
	  <th>Name</th>
	  <th>Amount</th>
 </tr>
 <thead>
 <tbody>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td data-title="ID">'.$row["rowno"].'</td>
  <td data-title="Date">'.$row["date"].'</td>
  <td data-title="Time">'.$row["time"].'</td>
   <td data-title="Rfid">'.$row["rfid"].'</td>
    <td data-title="Registration">'.$row["regno"].'</td>
	 <td data-title="Name">'.$row["uname"].'</td>
	 <td data-title="Amount">'.$row["amount"].'</td>
  
  
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>