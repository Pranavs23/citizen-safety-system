<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p5.php"); ?>
<table width="1174" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="17" height="44">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>View Feedback Reply </strong></div></td>
    <td width="87">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="257">&nbsp;</td>
    <td width="84">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><?php 
	$s1=$_POST["t1"];
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
    <td width="13">&nbsp;</td>
    <td width="293">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="298">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><table width="380" border="3">
      <tr>
        <td colspan="2"><div align="center">FEEDBACK
                <?php       
		
		$s=mysql_query("select* from feedback  where fid=$s1");
		
		if($row=mysql_fetch_array($s))
		{
		$feedback=$row[1];
		$fdate=$row[2];
		$reply=$row[3];
		$rdate=$row[4];
		}
		?>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><form name="form1" method="post" action="">
            <textarea name="textarea" cols="35"><?php echo $feedback; ?></textarea>
        </form></td>
      </tr>
      <tr>
        <td width="107">Date</td>
        <td width="253"><?php echo $fdate; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>Fid</td>
        <td><?php echo $s1; ?>&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td valign="top"><?php
	if($reply=="")
	   echo "<b><font color='red'>Reply not ready...Please wait";
	   else
	   {
	?>      <table width="200" border="3">
        <tr>
          <td colspan="2"><div align="center">REPLY</div></td>
        </tr>
        <tr>
          <td height="83" colspan="2"><form name="form2" method="post" action="">
            <textarea name="textarea2" cols="35"><?php echo $reply; ?></textarea>
          </form></td>
        </tr>
        <tr>
          <td width="117">Date</td>
          <td width="114"><?php echo $rdate; ?>&nbsp;</td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <?php
	}
	?>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="197"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
