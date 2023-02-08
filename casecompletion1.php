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
    <td width="33" height="24">&nbsp;</td>
    <td width="245">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center"><strong>Applicant Details </strong></div></td>
    <td width="175">&nbsp;</td>
  </tr>
  <tr>
    <td height="338">&nbsp;</td>
    <td colspan="2" valign="top"><?php
			include("connection.php");
			session_start();
			$pid=$_SESSION["pid"];
			
			 $s=mysql_query("select * from capproval a,fir b where a.pid='$pid'  and a.permission='Y' and a.applno=b.applno and b.firno not in(select firno from ccompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> no new cases";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#ooffaa''><tr><th>FIR no</th><th>Ddate</th><th>FIRdate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[9]</td><td>$row[2]</td><td>$row[11]</td><td><form action='casecompletion2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="269">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="224"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
