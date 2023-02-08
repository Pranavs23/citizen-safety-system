<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body>
<?php include("p1.php"); ?>

<table width="937" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="184" height="14"></td>
    <td width="581"></td>
    <td width="172"></td>
  </tr>
  <tr>
    <td height="297"></td>
    <td valign="top"><p align="center" class="style1">Crime Type List</p>
    <p>
      <?php 
	include("connection.php");
	$s=mysql_query("select*from crimetype");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No crimetype Registrered...";
	  else
	  {
	 
	echo "<center><table border='1' width='100%'><tr><th>Typename</th><th>Section No</th><th>Maximum Punishment<tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
	}
	echo"</table>";
	}
	?> 
    </p></td>
    <td></td>
  </tr>
  <tr>
    <td height="22"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
