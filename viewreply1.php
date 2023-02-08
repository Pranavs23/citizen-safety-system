<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="1172" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="44">&nbsp;</td>
    <td width="306">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center"><strong>View Feedback Reply </strong></div></td>
    <td width="328">&nbsp;</td>
  </tr>
  <tr>
    <td height="392">&nbsp;</td>
    <td colspan="2" valign="top"><?php 
	include("connection.php");
	session_start();
			$adminstaffid=$_SESSION["adminstaffid"];
			
	$s=mysql_query("select* from feedback  where admstaffid ='$adminstaffid'");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No Feedback...";
	  else
	  {
	
	echo "<center><table border='0' width='100%'><tr><th>Fid</th><th>Date</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[2]</td><td><form action='viewreply2.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td width="366">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="139"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
