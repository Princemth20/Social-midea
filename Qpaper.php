	<script type="text/javascript" src="editor/ckeditor.js"></script>
	<script src="editor/_samples/sample.js" type="text/javascript"></script>
	<link href="editor/_samples/sample.css" rel="stylesheet" type="text/css" />
<?php
include("mysql.php");
if(isset($_POST["button2"]))
{
$sql="INSERT INTO qpaper (papername,subject,section,description,upload,uploadtext)
VALUES
('$_POST[textfield]','$_POST[select]','$_POST[select2]',
'$_POST[textarea]','$_POST[fileField]','$_POST[textarea2]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
echo "Question paper uploaded Successfully";
  }

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question Paper page</title>
</head>

<body>
<form id="form1" name="form1"  method="post" action="Qpaper.php">
<table width="958" height="372">
  <tr>
    <td width="69">Paper Name:</td>
    <td width="608"><input name="textfield" type="text" id="textfield" size="40" /></td>
  </tr>
  <tr>
    <td>Section:</td>
    <td><select name="select" id="select">
    </select></td>
  </tr>
  <tr>
    <td>Subject:</td>
    <td><select name="select2" id="select2">
    </select></td>
  </tr>
  <tr>
    <td height="53">Description</td>
    <td><textarea name="textarea" id="textarea" cols="45" rows="3"></textarea></td>
  </tr>
  <tr>
    <td>Upload</td>
    <td>
      <label for="fileField"></label>
      <input name="fileField" type="file" id="fileField" size="40" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label for="textarea2"></label>
      <textarea class="ckeditor" cols="20" id="editor1" name="editor1" rows="10"></textarea>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button2" id="button2" value="Upload Question Paper" />
    </td>
  </tr>
</table></form>
</body>
</html>