<?php
session_start();
$name=$_SESSION["namestu"];
$college=$_SESSION["colstu"];
$status=$_REQUEST["stat"];
				mysqli_query($con,"UPDATE `payment` SET `status`='$status' WHERE `name`='$name' and `college`='$college'");
				echo "UPDATE `payment` SET `status`='$status' WHERE `name`='$name' and `college`='$college'";
?>