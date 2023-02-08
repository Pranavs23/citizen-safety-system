<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p3.php"); ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="184" height="44">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center"><strong> Case Redirection</strong></div></td>
    <td width="107">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="164">&nbsp;</td>
    <td width="29">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" valign="top"><?php
			include("connection.php");
			$s1=$_POST["t1"];
			$s2=$_POST["c1"];
			$s3=$_POST["t2"];
			
			 $s=mysql_query("select * from capplication where Applno not in(select Applno from capproval)");

			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Application no</th><th>Casedate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			if($s1==$row[0])
			echo"<tr align='center' bgcolor='#00bbcc'><td>$row[0]</td><td>$row[2]</td><td><form action='newcase22.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View' disabled></form></td></tr>";
			else
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td><form action='newcase22.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="24" height="155">&nbsp;</td>
    <td width="211" rowspan="4" valign="top"><div align="center">Details
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
		?> <table width="163" height="127" border="3">
          <!--DWLayoutTable-->
          <tr>
            <td>Appl No </td>
            <td><?php echo $s1; ?>&nbsp;</td>
          </tr>
          <tr>
            <td width="83">Name</td>
            <td width="60"><?php echo $name; ?>&nbsp;</td>
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
            <td>Age</td>
            <td><?php echo $age; ?>&nbsp;</td>
          </tr>
          </table>
        <p>&nbsp;</p>
    </div></td>
    <td width="18">&nbsp;</td>
    <td colspan="2" valign="top"><table width="242" border="3">
        <!--DWLayoutTable-->
        <tr>
          <td colspan="2"><div align="center">Complaint</div></td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="textarea" cols="30"><?php echo $complaint; ?></textarea></td>
        </tr>
        <tr>
          <td width="123">Date</td>
          <td width="78"><?php echo $regdate; ?>&nbsp;</td>
        </tr>
                    </table></td>
    <td>&nbsp;</td>
    <td rowspan="3" valign="top"><?php 
	include("connection.php");
	$s=mysql_query("select*from pstation");
	echo "<table border='1'><tr><th>PID</th><th>LOCATION</th><th>PHONE</th><th>DISTRICT</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
	}
	echo"</table>";
	?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="146">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><form name="form1" method="post" action="newcase33.php">
      <table width="230" border="3">
        <tr>
          <td width="184">select police station </td>
          <td width="89"><?php echo $s2; ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">comment</div></td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="t2" cols="30" id="t2"><?php echo $s3; ?></textarea></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center"> <?php
	  session_start();
			$admstaffid=$_SESSION["adminstaffid"];
			$ddate=date("y")."-".date("m")."-".date("d");
			$s="insert into capproval(Applno,Pid,Ddate,adcomment,admstaffid)values($s1,'$s2','$ddate','$s3','$admstaffid')";
			mysql_query($s);
			echo"<b>sucessfully redirected";
			?>
            </div></td>
          </tr>
      </table>
	  </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23"></td>
    <td width="89"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td width="133"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
