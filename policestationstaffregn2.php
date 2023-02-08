<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php include("p2.php"); ?>
<table width="1235" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="102" height="25">&nbsp;</td>
    <td width="766">&nbsp;</td>
    <td width="14">&nbsp;</td>
    <td width="309">&nbsp;</td>
    <td width="44">&nbsp;</td>
  </tr>
  <tr>
    <td height="552">&nbsp;</td>
    <td valign="top"><div align="center">
      <p><strong>POLICE STATION STAFF REGISTERATION </strong></p>
      <form name="form1" method="post" action="policestationstaffregn2.php">
	  
	      <?php
	   $s1=$_POST["t1"];
	   $s2=$_POST["t2"];
	   $s3=$_POST["t3"];
	   $s4=$_POST["t4"];
	   $s5=$_POST["t5"];
       $s6=$_POST["t6"];
	   $s7=$_POST["t7"];
	   $s8=$_POST["t8"];
       $s9=$_POST["t9"]; 
			  $s10=$_POST["r1"];  
			  $s11=$_POST["t10"];
			  
	   ?>
        <table width="515" border="1">
          <tr>
            <td width="75">Name</td>
            <td width="156"><?php echo $s1;?></td>
            <td width="94">House name </td>
            <td width="162"><?php echo $s2;?></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><?php echo $s3;?></td>
            <td>Pin</td>
            <td><?php echo $s4;?></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?php echo $s5;?></td>
            <td>Gender</td>
            <td><?php echo $s10;?>&nbsp;</td>
          </tr>
          <tr>
            <td>District</td>
            <td><?php echo $s6;?></td>
            <td>Email</td>
            <td><?php echo $s7;?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><?php echo $s8;?></td>
            <td>Designation</td>
            <td><?php echo $s9;?></td>
          </tr>
          <tr>
            <td height="43" colspan="3">Select Police Station </td>
            <td height="43"><?php echo $s11;?>&nbsp;</td>
          </tr>
          <tr>
            <td height="43" colspan="4"><div align="center">
              <?php
			
			include("connection.php");
			$Eno=0;
			 $s=mysql_query("select* from useraddress order by Eno desc");
		   if($row=mysql_fetch_array($s))
		   {
		   $Eno=$row[0];
			}
				$Eno++;
				$Cdate=date("y")."-".date("m")."-".date("d");
				$Pstaffid="PS1000";
				
				 $s=mysql_query("select* from pstaff order by Pstaffid desc");
				if ($row=mysql_fetch_array($s))
		   		{
				$Pstaffid=$row[0];
				}
				$Pstaffid++;
				$s="insert into Useraddress values($Eno,'$s1','$s2','$s3','$s4','$s5','$s10','$s6','$s7','$s8','$Cdate')";
				
		        mysql_query($s);
				
				$s="insert into pstaff values('$Pstaffid',$Eno,'password')";
				mysql_query($s);
				
				$Wno=1;
				$s="insert into pstaffwork values('$Pstaffid','$Wno','$s9','$s11','$Cdate')";
				
				mysql_query($s);
				
			
						   echo"<b>Registration Success....The ID is $Pstaffid...";
						   
			
			
			?>
</div></td>
            </tr>
        </table>
      </form>
      </div></td>
    <td>&nbsp;</td>
    <td valign="top"><p>Police Stations List</p>
    <p><?php 
	include("connection.php");
	$s=mysql_query("select*from pstation");
	echo "<table border='1'><tr><th>PID</th><th>LOCATION</th><th>PHONE</th><th>DISTRICT</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";
	}
	echo"</table>";
	?>
	&nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="39">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
