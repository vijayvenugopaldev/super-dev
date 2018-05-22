

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

    


<?php
	session_start();
	$username=$_SESSION["username"];
	?>

    <div class="main-content">
<form class="form-basic" method="post">
        <!-- You only need this form and the form-basic.css -->
<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "rfid");
$output = '';
$query = "SELECT * FROM `toll` WHERE `uname`='$username'";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h1 align="center">Toll Collection List</h1><br><br>
<table>
<thead>
 <tr>
   <th>RFID No.</th>
      <th>Name</th>
      <th>Initial Balance</th>
      <th>Total Amount</th>
	  <th>Final Balance</th>
	   <th>Date</th>
	   <th>Time</th>
	   <th>Status</th>
 </tr>
 <thead>
 <tbody>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td data-title="RFID No.">'.$row["rfid"].'</td>
  <td data-title="Name">'.$row["uname"].'</td>
  <td data-title="Initial Balance">'.$row["initialbal"].'</td>
  <td data-title="Total Amount">'.$row["tollamount"].'</td>
   <td data-title="Final Balance">'.$row["finalbal"].'</td>
    <td data-title="Date">'.$row["date"].'</td>
	 <td data-title="Time">'.$row["time"].'</td>
	  <td data-title="Status">'.$row["status"].'</td>
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
