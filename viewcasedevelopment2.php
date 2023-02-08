<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p5.php"); ?>

<table width="1220" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="26" height="44">&nbsp;</td>
    <td width="147">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center"><strong>view case development </strong></div></td>
    <td width="218">&nbsp;</td>
    <td width="53">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="68">&nbsp;</td>
  </tr>
  <tr>
    <td height="301">&nbsp;</td>
    <td colspan="2" valign="top">Details
      <?php
	  $s2=$_POST["t1"];
	  
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
      <table width="299" height="252" border="0">
        <!--DWLayoutTable-->
        <tr>
          <td>Appl No </td>
          <td><?php echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="83">Name</td>
          <td width="196"><?php echo $name; ?>&nbsp;</td>
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
    <td width="9">&nbsp;</td>
    <td width="225" valign="top"><table width="233" height="130" border="3">
      <!--DWLayoutTable-->
      <tr>
        <td width="201" height="44"><div align="center">complaint</div></td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="">
            <div align="center">
              <textarea name="textarea" rows="7"><?php echo $complaint;?></textarea>
            </div>
        </form></td>
      </tr>
    </table></td>
    <td width="14">&nbsp;</td>
    <td colspan="2" valign="top"><?php
	
	
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
    <td valign="top"><?php

	$s=mysql_query("select * from cdevelopment where firno='$firno'  and entno=$s2");
	if($row=mysql_fetch_array($s))
	{
	$development=$row[2];
	$ddate=$row[4];
	
	
	}
	?>      <table width="200" border="3">
        <tr>
          <td width="82">ENo</td>
          <td width="98"><?php echo $s2; ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><form name="form2" method="post" action="">
            <textarea name="textarea2" rows="7"><?php echo $development; ?></textarea>
          </form></td>
        </tr>
        <tr>
          <td>Date</td>
          <td><?php echo $ddate; ?>&nbsp;</td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="176">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="74">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
