<?php
include("connect.php");
 session_start();
$username=$_REQUEST["name"];
$password=$_REQUEST["pass"];
$_SESSION["username"]=$username;
$getpass=mysqli_query($con,"SELECT * FROM `login` WHERE username='$username' and password='$password'");
$getpassval=mysqli_fetch_assoc($getpass);
$pass=$getpassval["password"];
if($password==$pass)
{
	session_start();
	$_SESSION["username"]=$getpassval["username"];
if($getpassval["type"]=="1")
	{	
	
	
		Header("Location:homeadmin.php");
	}
	else if($getpassval["type"]=="0")
	{
	
	Header("Location:hometollbooth.php");
	}
	else if($getpassval["type"]=="2")
	{
	
	Header("Location:homeuser.php");
	}
	
	else{
		Header("Location:index.php");
	}
}
else{
	Header("Location:index.php");
}

?>