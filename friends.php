<?php
session_start();
include("profilesql.php");
$result = mysql_query("SELECT * FROM addfriends where meid='$_SESSION[stuid]' ");
while($row = mysql_fetch_array($result))
  {
$uid1[$i] = $row["friendid"];
$i++;
  }

 $acrec1 = mysql_query("SELECT * FROM addfriends WHERE userid='$uid1[1]'");

while($row = mysql_fetch_array($acrec2))
  {
	$img1[0]=  $row["image"];
  }
  
  $acrec2 = mysql_query("SELECT * FROM addfriends WHERE userid='$uid1[2]'");

while($row = mysql_fetch_array($acrec2))
  {
	$img1[1]=  $row["image"];
  }
  
  $acrec3 = mysql_query("SELECT * FROM profile WHERE userid='$uid1[3]' ");

while($row = mysql_fetch_array($acrec3))
  {
	$img1[2]=  $row["image"];
  }
  
  $acrec4 = mysql_query("SELECT * FROM profile WHERE userid='$uid1[4]' ");
while($row = mysql_fetch_array($acrec4))
  {
	$img1[3]=  $row["image"];
  }
  ?>