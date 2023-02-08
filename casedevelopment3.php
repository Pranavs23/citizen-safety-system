<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p4.php"); ?>

<table width="1218" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="192" height="44">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>Send Case Development </strong></div></td>
    <td width="32">&nbsp;</td>
    <td colspan="2"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td width="70">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="22">&nbsp;</td>
  </tr>
  <tr>
    <td height="299" colspan="2" valign="top"><?php
	$s1=$_POST["t1"];
	
			include("connection.php");
			session_start();
			$pid=$_SESSION["pid"];
			$pstaffid=$_SESSION["Pstaffid"];
			
			 $s=mysql_query("select * from capproval a,fir b where a.pid='$pid'  and a.permission='Y' and a.applno=b.applno and b.firno not in(select firno from ccompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> no new cases";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>FIR no</th><th>Ddate</th><th>FIRdate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[9]</td><td>$row[2]</td><td>$row[11]</td><td><form action='casedevelopment2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;
    <div align="right"></div></td>
    <td width="10">&nbsp;</td>
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
    <td width="22">&nbsp;</td>
    <td width="179" valign="top"><table width="200" height="130" border="3">
      <tr>
        <td height="44"><div align="center">Complaint</div></td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="">
            <textarea name="textarea"><?php echo $complaint;?></textarea>
        </form></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td valign="top"><form name="form2" method="post" action="">
        <?php
	$s2=$_POST["t2"];
	?>
        <table width="200" border="3">
          <tr>
            <td>Development           	</td>
          </tr>
          <tr>
            <td><textarea name="t2" id="t2"><?php echo $s2; ?></textarea></td>
          </tr>
          <tr>
            <td><div align="center"><?php
		  $entno=0;
		  $ddate=date("y")."-".date("m")."-".date("d");
		  $s=mysql_query("select * from cdevelopment where firno='$s1' order by entno desc");
		    if($row=mysql_fetch_array($s))
			{$entno=$row[1];
			}
			$entno++;
			$s="insert into cdevelopment values('$s1','$entno','$s2','$pstaffid','$ddate')";
			mysql_query($s);
			
			echo"development successfully send";
			?>
  
            </div></td>
          </tr>
        </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td width="283">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="188">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
