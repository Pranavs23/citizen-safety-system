<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<?php include("p1.php"); ?>
<table width="1092" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="66" height="337">&nbsp;</td>
    <td width="935" valign="top"><div align="center">
        <p class="style1">New Case Registeration
  <?php
	   $s1=$_POST["t2"];
	   $s2=$_POST["t4"];
	   $s3=$_POST["t5"];
	   $s4=$_POST["t6"];
	   $s5=$_POST["t7"];
	   $s6=$_POST["t8"];
	   $s7=$_POST["t3"];
	   $s8=$_POST["t9"];
	   $s9=$_POST["t10"];
	   $s101=$_POST["t101"];
	   $s102=$_POST["t102"];
	   $s103=$_POST["t103"];
	   $cdate1="$s101-$s102-$s103";
	   $cdate2="$s103-$s102-$s101";
	   
	   $s11=$_POST["t11"]; 
	   $s12=$_POST["t13"]; 
	    
	   
	   ?>
        </p>
        <form name="form1" method="post" action="">
          <table width="915" border="0">
            <tr>
              <td width="191" height="31">Name</td>
              <td width="255"><?php echo $s1; ?>&nbsp;</td>
              <td width="220">House name/ No </td>
              <td width="231"><?php echo $s7;?>&nbsp; </td>
            </tr>
            <tr>
              <td height="23">Place</td>
              <td><?php echo $s2 ;?>&nbsp;</td>
              <td>Pin</td>
              <td><?php echo $s3; ?>&nbsp;</td>
            </tr>
            <tr>
              <td height="23">Phone</td>
              <td><?php echo $s4; ?>&nbsp;</td>
              <td>Sex</td>
              <td><?php echo $s5; ?>&nbsp;</td>
            </tr>
            <tr>
              <td height="23">District</td>
              <td><?php echo $s6; ?></td>
              <td>Email </td>
              <td><?php echo $s8;?>&nbsp;</td>
            </tr>
            <tr>
              <td height="23">Case Date </td>
              <td><?php echo $cdate1; ?>&nbsp;</td>
              <td colspan="2"><div align="center"><strong>Complaint </strong></div></td>
            </tr>
            <tr>
              <td height="36">Password</td>
              <td><input name="t11" type="password" id="t113" value="<?php echo $s11;  ?>" disabled></td>
              <td colspan="2" rowspan="4"><div align="center">
                  <textarea name="t13" cols="60" rows="7" id="textarea"><?php echo $s12; ?></textarea>
              </div></td>
            </tr>
            <tr>
              <td height="32">retype Password </td>
              <td><input name="password" type="password"  value="<?php echo $s11;  ?>" ></td>
            </tr>
            <tr>
              <td height="23">Age</td>
              <td height="23"><?php echo $s9; ?></td>
            </tr>
            <tr>
              <td height="24" colspan="2"><div align="center">  
			     <?php  include("connection.php");
			$Eno=0;
			 $s=mysql_query("select* from useraddress order by Eno desc");
		   if($row=mysql_fetch_array($s))
		   {
		   $Eno=$row[0];
			}
				$Eno++;
				$Cdate=date("y")."-".date("m")."-".date("d");
				$Applno="10000";
				
				 $s=mysql_query("select* from Capplication order by Applno desc");
				if ($row=mysql_fetch_array($s))
		   		{
				$Applno=$row[0];
				}
				$Applno++;
				$s="insert into Useraddress values($Eno,'$s1','$s7','$s2','$s3','$s4','$s5','$s6','$s8','$s9','$Cdate')";
				
		        mysql_query($s);
				$s="insert into Capplication values($Applno,$Eno,'$cdate2','$s12','$s11')";
				
				mysql_query($s);
				
						   echo"<b>Registration Success....The ID is $Applno...Please wait for the approval...";
				?>
				  
                </div></td>
            </tr>
          </table>
        </form>
    </div></td>
  <td width="91">&nbsp;</td>
  </tr>
</table>
</body>
</html>
