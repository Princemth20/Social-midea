<?php
include_once("mysql.php");

$profilerec = mysql_query("SELECT * FROM stuacc WHERE email ='$_SESSION[logid]'");

while($row = mysql_fetch_array($profilerec))
  {
$usid  = $row["id"];
$fname = $row["firstname"];
$lname = $row["lastname"];
$gend = $row["iam"];
  }
  $_SESSION["iduser"] = $usid;
$profilerec = mysql_query("SELECT * FROM profile WHERE userid ='$usid' ");

while($row = mysql_fetch_array($profilerec))
  {

$relationship= $row["relstat"]; 	
$city = $row["city"]; 	
$state = $row["state"]; 	
$pincode = $row["pincode"]; 	
$country = $row["country"]; 	
$usimg = $row["image"];
$hschool = $row["hschool"]; 	
$college = $row["coluni"]; 	
$course= $row["course"];
  }
?>