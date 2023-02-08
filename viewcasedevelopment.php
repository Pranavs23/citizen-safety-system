<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p5.php"); ?>

<table width="1192" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="135" height="44">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>View Case Development </strong></div></td>
    <td width="45">&nbsp;</td>
    <td width="91">&nbsp;</td>
    <td width="340">&nbsp;</td>
    <td width="22">&nbsp;</td>
  </tr>
  <tr>
    <td height="270">&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top">Details
      <?php
	  session_start();
	  $s1=$_SESSION["Applno"];
	  
	  include("connection.php");
	  
	  
	
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
      <table width="277" height="252" border="0">
        <!--DWLayoutTable-->
        <tr>
          <td>Appl No </td>
          <td><?php echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="83">Name</td>
          <td width="174"><?php echo $name; ?>&nbsp;</td>
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
    <td width="15">&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><table width="293" height="130" border="3">
      <!--DWLayoutTable-->
      <tr>
        <td width="279" height="44"><div align="center">Complaint</div></td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="">
            <textarea name="textarea"><?php echo $complaint;?></textarea>
        </form></td>
      </tr>
      <tr>
        <td height="169"></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td valign="top"><?php
	
	
	  $s=mysql_query("select * from fir where applno='$s1'");
	  if($row=mysql_fetch_array($s))
	  {
	  $firno=$row[1];
	  }
	 $s=mysql_query("select* from cdevelopment where firno=$firno");
			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Eno</th><th>Ddate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[1]</td><td>$row[4]</td><td><form action='viewcasedevelopment2.php' method='post'><input type='hidden' name='t1' value='$row[1]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
	
	
	?>      &nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="31"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="251">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="249">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
