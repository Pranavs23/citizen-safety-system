<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p5.php"); ?>
<table width="919" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="48" height="21">&nbsp;</td>
    <td width="159">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center"><strong>View Feedback Reply </strong></div></td>
    <td width="207">&nbsp;</td>
  </tr>
  <tr>
    <td height="341">&nbsp;</td>
    <td colspan="2" valign="top"><?php 
	include("connection.php");
	session_start();
			$Applno=$_SESSION["Applno"];
			
	$s=mysql_query("select* from feedback  where Applno ='$Applno'");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No replies...";
	  else
	  {
	
	echo "<center><table border='0' width='100%'><tr><th>Fid</th><th>Date</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[2]</td><td><form action='viewreply222.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td width="291">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="214"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
