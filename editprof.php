<?php
session_start();
$updrec="";
include("header.php");
include_once("mysql.php");
include("profilesql.php");

if(isset($_POST["updprof"]))
{
mysql_query("UPDATE stuacc SET firstname='$_POST[fname]',lastname='$_POST[lname]'
WHERE id= '$_SESSION[iduser]'");

mysql_query("UPDATE profile SET city ='$_POST[city]',	state='$_POST[state]',pincode='$_POST[pincode]',country='$_POST[loc]',hschool='$_POST[hschool]',coluni='$_POST[coll]',course='$_POST[hschool2]'
WHERE userid='$_SESSION[iduser]'");
$updrec = "Record Updated Successfully"; 
}
$conrec = mysql_query("SELECT * FROM college");
?>
<script language="javascript">

 function edt()
{
	
	if(document.edit.fname.value=="")
	{
		alert("Please enter first name");
		document.edit.fname.focus();
		document.edit.fname.select();
		return false;
	}
	else if(document.edit.lname.value=="")
	{
		alert("Please enter last name");
		document.edit.lname.focus();
		document.edit.lname.select();
		return false;
	}
	else if(document.edit.city.value=="")
	{
		alert("Please enter city");
		document.edit.city.focus();
		document.edit.city.select();
		return false;
	}

else if(document.edit.state.value=="")
	{
		alert("Please enter state");
		document.edit.state.focus();
		document.edit.state.select();
		return false;
		
		
	}
	else if(document.edit.pincode.value=="")
	{
		alert("Please enter pin code");
		document.edit.pincode.focus();
		document.edit.pincode.select();
		return false;
	}
	else if(document.edit.loc.value=="Country")
		{
			alert("Please select Your Country");
		document.edit.coll.focus();
		return false;
		}
	else if(document.edit.img.value=="")
	{
		alert("Please insert image");
		document.edit.img.focus();
		document.edit.img.select();
		return false;
	}
	else if(document.edit.hschool.value=="")
	{
		alert("Please enter school name");
		document.edit.hschool.focus();
		document.edit.hschool.select();
		return false;
	}

		
		
	else if(document.edit.coll.value=="college")
		{
			alert("Please select college");
		document.edit.coll.focus();
		return false;
		}
		else if(document.edit.course.value=="course")
		{
			alert("Please select course");
		document.edit.course.focus();
		return false;
		}
		
		
	else
		{
		return true;
		}	
}
	</script>


<center>
<div class=container>
<div class=container>

<!-- head --><!-- navigation menu -->
<?php include("head.php"); ?>
<?php include("menu.php"); ?>

<div style="padding: 10px; text-align: left;">
<!-- body  content -->

    <table width="100%" height="462" border="0" >
  <tr>
    <td width="17%" rowspan="7" align="left" valign="top" bgcolor="#CCCCCC"><?php include("profileleft.php"); ?></td>
    <td colspan="3" valign="top">
  <form id="edit" name="edit" method="post" action="editprof.php" onSubmit="return edt()">
  <table width="68%" border="1" align="center">
    <tr>
      <th colspan="2" scope="row">Update Profile</th>
      </tr>
    <tr>
      <th colspan="2" scope="row" align="center"> <?php echo $updrec; ?></th>
      </tr>
    <tr>
      <th scope="row">First Name</th>
      <td><input name="fname" type="text" id="fname" size="40" value="<?php echo $fname ;?>"/></td>
      </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><input name="lname" type="text" id="lname" size="40" value="<?php echo $lname ;?>"/></td>
      </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $gend ;?></td>
      </tr>
    <tr>
      <th scope="row">City</th>
      <td><input name="city" type="text" id="city" size="40" value="<?php echo $city;?>" /></td>
      </tr>
    <tr>
      <th scope="row">State</th>
      <td><input name="state" type="text" id="state" size="40" value="<?php echo $state;?>" /></td>
      </tr>
    <tr>
      <th scope="row">Pincode</th>
      <td><input name="pincode" type="text" id="pincode" size="40" value="<?php echo $pincode;?>"/></td>
      </tr>
    <tr>
      <th scope="row">Country</th>
      <td><select id="loc" name="loc">
        <option value="select country">select country</option>
        <option value="AQ"> Antarctica </option>
        <option value="AG"> Antigua and Barbuda </option>
        <option value="AR"> Argentina </option>
        <option value="AW"> Aruba </option>
        <option value="AU"> Australia </option>
        <option value="BW"> Botswana </option>
        <option value="BV"> Bouvet Island </option>
        <option value="BR"> Brazil (Brasil) </option>
        <option value="CA"> Canada </option>
        <option value="CN"> China </option>
        <option value="EG"> Egypt (مصر) </option>
        <option value="FR"> France </option>
        <option value="GA"> Gabon </option>
        <option value="DE"> Germany (Deutschland) </option>
        <option value="GH"> Ghana </option>
        <option value="HM"> Heard Island and McDonald Islands </option>
        <option value="HN"> Honduras </option>
        <option value="HK"> Hong Kong </option>
        <option value="HU"> Hungary (Magyarország) </option>
        <option value="IS"> Iceland (Ísland) </option>
        <option value="IN">India </option>
        <option value="ID"> Indonesia </option>
        <option value="IR"> Iran (ایران) </option>
        <option value="IQ"> Iraq (العراق) </option>
        <option value="IE"> Ireland </option>
        <option value="IM"> Isle of Man </option>
        <option value="IL"> Israel (ישראל) </option>
        <option value="IT"> Italy (Italia) </option>
        <option value="JM"> Jamaica </option>
        <option value="JP"> Japan (日本) </option>
        <option value="JE"> Jersey </option>
        <option value="JO"> Jordan (الاردن) </option>
        <option value="KZ"> Kazakhstan (Қазақстан) </option>
        <option value="KE"> Kenya </option>
        <option value="KI"> Kiribati </option>
        <option value="KW"> Kuwait (الكويت) </option>
        <option value="KG"> Kyrgyzstan (Кыргызстан) </option>
        <option value="LA"> Laos (ນລາວ) </option>
        <option value="LV"> Latvia (Latvija) </option>
        <option value="LB"> Lebanon (لبنان) </option>
        <option value="LS"> Lesotho </option>
        <option value="LR"> Liberia </option>
        <option value="LY"> Libya (ليبيا) </option>
        <option value="LI"> Liechtenstein </option>
        <option value="LT"> Lithuania (Lietuva) </option>
        <option value="LU"> Luxembourg (Lëtzebuerg) </option>
        <option value="MO"> Macao </option>
        <option value="FM"> Micronesia </option>
        <option value="MD"> Moldova </option>
        <option value="MC"> Monaco </option>
        <option value="MN"> Mongolia (Монгол Улс) </option>
        <option value="NP"> Nepal (नेपाल) </option>
        <option value="NL"> Netherlands (Nederland) </option>
        <option value="NZ"> New Zealand </option>
        <option value="PL"> Poland (Polska) </option>
        <option value="PT"> Portugal </option>
        <option value="RU"> Russia (Россия) </option>
        <option value="SG"> Singapore (Singapura) </option>
        <option value="ZA"> South Africa </option>
        <option value="GS"> South Georgia and the South Sandwich Islands </option>
        <option value="KR"> South Korea (한국) </option>
        <option value="ES"> Spain (España) </option>
        <option value="LK"> Sri Lanka </option>
        <option value="SD"> Sudan (السودان) </option>
        <option value="SZ"> Swaziland </option>
        <option value="ZW"> Zimbabwe </option>
        </select></td>
      </tr>
    <tr>
      <th scope="row">High School</th>
      <td><input name="hschool" type="text" id="hschool" size="40" value="<?php echo $hschool;?>"/></td>
    </tr>
    <tr>
      <th scope="row">College</th>
      <td><select name="coll" id="coll">
        <option value="select college">select college</option>
        <?php
echo "record".		mysql_num_rows($conrec);
	while($row = mysql_fetch_array($conrec))
  		{
		  echo "<option value='$row[collegename]'>$row[collegename], $row[collegelocation]</option>";
  		}
		?>
        </select></td>
      </tr>
    <tr>
      <th scope="row">Course</th>
      <td><input name="hschool2" type="text" id="hschool2" size="40" value="<?php echo $course;?>"/></td>
      </tr>
    <tr>
      <th colspan="2" scope="row">
        <input type="submit" name="updprof" id="updprof" value="Update Profile" />
        </th>
      </tr>
  </table></form></td>
  </tr>
  </table>
   

</div>
<center>
<?php include("footer.php"); ?>


