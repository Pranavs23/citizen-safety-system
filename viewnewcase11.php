<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p4.php"); ?>

<table width="946" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="44">&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center"><strong> Case Approval </strong></div></td>
    <td width="258">&nbsp;</td>
  </tr>
  <tr>
    <td height="318">&nbsp;</td>
    <td colspan="2" valign="top"><?php
			session_start();
			$pid=$_SESSION["pid"];
			
			include("connection.php");
		 $s=mysql_query("select * from capplication a,capproval b where a.applno=b.applno and b.pid='$pid' and b.permission is null");
			if(mysql_num_rows($s)==0)
			echo"<b> No new Cases....";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#aaffaa''><tr><th>Application no</th><th>Casedate</th><th>Redirect date</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td>$row[7]</td><td><form action='viewnewcase22.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="176">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="317"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
