<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p2.php"); ?>

<table width="1066" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="102" height="25">&nbsp;</td>
    <td width="766">&nbsp;</td>
    <td width="198">&nbsp;</td>
  </tr>
  <tr>
    <td height="249">&nbsp;</td>
    <td valign="top"><div align="center">
        <p><strong>ADMIN STAFF REGISTERATION </strong></p>
        <form name="form1" method="post" action="">
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
			 
	   ?>
          <table width="667" border="1">
            <tr>
              <td width="153">Name</td>
              <td width="156"><?php echo $s1;?>&nbsp;</td>
              <td width="177">House name </td>
              <td width="153"><?php echo $s2;?>&nbsp;</td>
            </tr>
            <tr>
              <td>Place</td>
              <td><?php echo $s3;?>&nbsp;</td>
              <td>Pin</td>
              <td><?php echo $s4;?>&nbsp;</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><?php echo $s5;?>&nbsp;</td>
              <td>Gender</td>
              <td><?php echo $s10;?>&nbsp;</td>
            </tr>
            <tr>
              <td>District</td>
              <td><?php echo $s6;?>&nbsp;</td>
              <td>Email</td>
              <td><?php echo $s7;?>&nbsp;</td>
            </tr>
            <tr>
              <td>Age</td>
              <td><?php echo $s8;?>&nbsp;</td>
              <td>Designation</td>
              <td><?php echo $s9;?>&nbsp;</td>
            </tr>
            <tr>
              <td height="43" colspan="4"><div align="center">
                <?php  include("connection.php");
			$Eno=0;
			 $s=mysql_query("select* from Useraddress order by Eno desc");
		   if($row=mysql_fetch_array($s))
		   {
		   $Eno=$row[0];
				}
				$Eno++;
				$Regdate=date("y")."-".date("m")."-".date("d");
				$admstaffid="adstaff100";
				
				 $s=mysql_query("select* from adminstaff order by admstaffid desc");
				if ($row=mysql_fetch_array($s))
		   		{
				$admstaffid=$row[0];
				}
				$admstaffid++;
				$s="insert into Useraddress values('$Eno','$s1','$s2','$s3','$s4','$s5','$s10','$s6','$s7','$s8','$Regdate')";
				
		        mysql_query($s);
				$s="insert into adminstaff values('$admstaffid','$Eno','$s9','password')";
				mysql_query($s);
				
						   echo"<b>Registration Success....The ID is $admstaffid";
				?>
              </div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="2"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
