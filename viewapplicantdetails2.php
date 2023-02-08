<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p4.php"); ?>

<table width="1236" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="191" height="44">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>view applicant details</strong></div></td>
    <td width="45">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="271">&nbsp;</td>
    <td width="29">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3" valign="top"><?php
	$s1=$_POST["t1"];

			include("connection.php");
			session_start();
			$pid=$_SESSION["pid"];
			
			 $s=mysql_query("select * from capproval a,fir b where a.pid='$pid'  and a.permission='Y' and a.applno=b.applno and b.firno not in(select firno from ccompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> no new cases";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#ff00aa''><tr><th>FIR no</th><th>Ddate</th><th>FIRdate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[9]</td><td>$row[2]</td><td>$row[11]</td><td><form action='viewapplicantdetails2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;
    <div align="right"></div></td>
    <td width="9" height="271">&nbsp;</td>
    <td width="166" rowspan="2" valign="top">Details
      <?php
	  include("connection.php");
	  
	  $s=mysql_query("select * from fir where firno='$s1'");
	  if($row=mysql_fetch_array($s))
	  {
	  $applno=$row[1];
	  }
	  
	
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
    <td rowspan="2" valign="top"><table width="200" height="159" border="3">
      <!--DWLayoutTable-->
      <tr>
        <td height="44"><div align="center">complaint</div></td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="casedevelopment2.php">
            <textarea name="textarea"><?php echo $complaint;?></textarea>
        </form></td>
      </tr>
      <tr>
        <td height="27"></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td valign="top"><?php
	
	 $s=mysql_query("select* from fir where applno='$s1'");
	 if($row=mysql_fetch_array($s))
	 {
	 $firno=$row[0];
	 }
	 $s=mysql_query("select* from appmore where firno='$firno'");
			if(mysql_num_rows($s)==0)
			echo"<b> No More Details";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Entno</th><th>Ddate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[1]</td><td>$row[3]</td><td><form action='viewapplicantdetails3.php' method='post'><input type='hidden' name='t1' value='$s1'><input type='hidden' name='t2' value='$row[1]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
	
	
	?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td width="313"></td>
    <td></td>
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
