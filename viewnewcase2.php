<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p4.php"); ?>

<table width="1215" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="44">&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>View Case Details </strong></div></td>
    <td width="61">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="236">&nbsp;</td>
    <td width="217">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td colspan="2" rowspan="4" valign="top"><?php
	$s1=$_POST["t1"];
			session_start();
			$pid=$_SESSION["pid"];
			
			include("connection.php");
		 $s=mysql_query("select * from capplication a,capproval b where a.applno=b.applno and b.pid='$pid' and b.permission is null");
			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#aaffaa''><tr><th>Application no</th><th>Casedate</th><th>Redirect date</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			if($s1==$row[0])
				echo"<tr align='center' bgcolor='#00bbcc'><td>$row[0]</td><td>$row[2]</td><td>$row[7]</td><td><form action='viewnewcase2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>"; 
			else
			
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td>$row[7]</td><td><form action='viewnewcase2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="177">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="298">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top">Details
      <?php
		$s=mysql_query("select* from capplication a,useraddress b  where a.eno=b.eno and a.applno=$s1");
		if($row=mysql_fetch_array($s))
		{
		$name=$row[6];
		$hname=$row[7];
		$place=$row[8];
		$pin=$row[9];
		$phone=$row[10];
		$sex=$row[11];
		$dist=$row[12];
		$email=$row[13];
		$age=$row[14];
		$regdate=$row[15];
		$cdate=$row[2];
		$complaint=$row[3];
		
		}
		?>
      <table width="155" height="252" border="3">
        <!--DWLayoutTable-->
        <tr>
          <td>Appl No </td>
          <td><?php echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="83">Name</td>
          <td width="52"><?php echo $name; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>House name </td>
          <td><?php echo $hname; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Place</td>
          <td><?php echo $place; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Pin</td>
          <td><?php echo $pin; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><?php echo $phone; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Sex</td>
          <td><?php echo $sex; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>District</td>
          <td><?php echo $dist; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $email; ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="23">Age</td>
          <td><?php echo $age; ?>&nbsp;</td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <td valign="top"><table width="235" border="3">
      <!--DWLayoutTable-->
      <tr>
        <td colspan="2"><div align="center">Complaint</div></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name="textarea" cols="30"><?php echo $complaint; ?></textarea></td>
      </tr>
      <tr>
        <td width="136">Date</td>
        <td width="79"><?php echo $regdate; ?>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">Admin instruction </td>
      </tr>
      <tr>
        <td colspan="2"><form name="form1" method="post" action="">
            <?php
		$s=mysql_query("select * from capproval where applno=$s1");
		if($row=mysql_fetch_array($s))
		{
		$admcomment=$row[3];
		}
		
		?>
            <textarea name="textarea2"><?php echo $admcomment; ?></textarea>
        </form></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="21"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="301"></td>
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
