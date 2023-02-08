<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p4.php"); ?>

<table width="1246" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="171" height="44">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>Case Completion </strong></div></td>
    <td width="81">&nbsp;</td>
    <td width="417">&nbsp;</td>
    <td width="38">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" valign="top"><?php
	$s1=$_POST["t1"];
		$s2=$_POST["r1"];
			$s3=$_POST["t2"];

			include("connection.php");
			session_start();
			$pid=$_SESSION["pid"];
			
			 $s=mysql_query("select * from capproval a,fir b where a.pid='$pid'  and a.permission='Y' and a.applno=b.applno and b.firno not in(select firno from ccompletion)  and a.applno<>$s1");
			if(mysql_num_rows($s)==0)
			echo"<b> no new cases";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#ffaa00''><tr><th>FIR no</th><th>Ddate</th><th>FIRdate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[9]</td><td>$row[2]</td><td>$row[11]</td><td><form action='casecompletion2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;
    <div align="right"></div></td>
    <td width="9" height="301">&nbsp;</td>
    <td colspan="2" valign="top">Details
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
      <table width="220" height="252" border="3">
        <!--DWLayoutTable-->
        <tr>
          <td>Appl No </td>
          <td><?php echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="83">Name</td>
          <td width="117"><?php echo $name; ?>&nbsp;</td>
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
    <td valign="top"><form name="form1" method="post" action="casecompletion3.php">
        <table width="345" height="188" border="3">
          <tr>
            <td width="153">status</td>
            <td width="232"><?php echo $s2;?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">comment</div></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="t2" cols="50" id="t2"><?php echo $s3;?></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><?php
			$cdate=date("y")."-".date("m")."-".date("d");
			$s=mysql_query("select * from fir where applno=$s1");
			if($row=mysql_fetch_array($s))
			{
			$firno=$row[0];
			}
			$s="insert into ccompletion values('$firno','$s2','$s3','$cdate')";
			
			mysql_query($s);
			echo "case completed";
			?>
			
			
			
            </div></td>
          </tr>
        </table>
		<?php
		echo "<input type='hidden'  name='t1' value='$s1'>";
		?>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30"></td>
    <td width="155"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="14"></td>
    <td width="375"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
