<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p3.php"); ?>

<table width="946" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="44">&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center"><strong>New Case </strong></div></td>
    <td width="258">&nbsp;</td>
  </tr>
  <tr>
    <td height="299">&nbsp;</td>
    <td colspan="2" valign="top"><?php
			include("connection.php");
			
			 $s=mysql_query("select * from capplication where Applno not in(select applno from capproval)");
			if(mysql_num_rows($s)==0)
			echo"<b> no  new cases";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#ooffaa''><tr><th>Application no</th><th>Casedate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td><form action='newcase2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="112">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="381">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
