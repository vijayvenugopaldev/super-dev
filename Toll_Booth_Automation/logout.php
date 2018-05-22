<?php
include("connect.php");
session_start();
session_destroy();
echo ("<script language='Javascript'>window.alert('You have been logged out Successfully');window.location.href='index.php';</script>");

?>