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

<body><?php include("p2.php"); ?>

<table width="1226" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="155" height="36">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center" class="style1">Feedback Reply to Adminstaff </div></td>
    <td width="141">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="270">&nbsp;</td>
    <td width="34">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" valign="top"><?php 
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	
	include("connection.php");
	$s=mysql_query("select*from feedback  where admstaffid is not null and reply is null and fid<>$s1");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No replies...";
	  else
	  {
	
	echo "<center><table border='0' width='100%'><tr><th>Fid</th><th>Admin staffid</th><th>Fdate</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[5]</td><td>$row[2]</td><td><form action='freply2.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td width="13" height="326">&nbsp;</td>
    <td width="256" rowspan="2" valign="top">
	<?php
	$s=mysql_query("select * from feedback where fid=$s1");
	if($row=mysql_fetch_array($s))
	{
	$feedback=$row[1];
	$fdate=$row[2];
	$admstaffid=$row[5];
	
	}
	
	?>	<table width="231" border="3">
        <tr>
          <td colspan="2"><div align="center">Details</div></td>
        </tr>
        <tr>
          <td>fid
          <div align="center"></div></td>
          <td><?php echo $s1;     ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">feedback</div></td>
        </tr>
        <tr>
          <td height="117" colspan="2"><form name="form1" method="post" action="">
            <textarea name="t1" cols="35" rows="7" id="t1"><?php echo $feedback; ?></textarea>
          </form></td>
        </tr>
        <tr>
          <td width="113" height="32">date</td>
          <td width="118" height="32"><?php  echo $fdate;   ?>&nbsp;</td>
        </tr>
    </table></td>
    <td width="11">&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><blockquote>
        <?php
	$s=mysql_query("select * from adminstaff a,useraddress b where a.admstaffid='$admstaffid'  and a.eno=b.eno");
	if($row=mysql_fetch_array($s))
	{
	
	$name=$row[5];
	$hname=$row[6];
	$place=$row[7];
	$pin=$row[8];
	$phone=$row[9];
	$sex=$row[10];
	$dist=$row[11];
	$email=$row[12];
	$age=$row[13];
	$regdate=$row[14];
	
	
	
	
	}
	
	?>
        <table width="200" height="308" border="3">
          <tr>
            <td colspan="2"><div align="center">Adminstaff</div></td>
          </tr>
          <tr>
            <td width="89">Adminstaffid</td>
            <td width="88"><?php echo $admstaffid;  ?></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><?php echo $name;    ?>&nbsp;</td>
          </tr>
          <tr>
            <td>House Name </td>
            <td><?php    echo $hname; ?>
      &nbsp;</td>
          </tr>
          <tr>
            <td>Place</td>
            <td><?php   echo $place;  ?>            &nbsp;</td>
          </tr>
          <tr>
            <td>Pin</td>
            <td><?php   echo $pin ; ?>
      &nbsp;</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?php  echo $phone;   ?>
      &nbsp;</td>
          </tr>
          <tr>
            <td>Sex</td>
            <td><?php echo $sex ;   ?>&nbsp;</td>
          </tr>
          <tr>
            <td>District</td>
            <td><?php   echo $dist;  ?>
      &nbsp;</td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php   echo $email;  ?>
      &nbsp;</td>
          </tr>
          <tr>
            <td>Age</td>
            <td><?php   echo $age;  ?>
      &nbsp;</td>
          </tr>
          <tr>
            <td height="23">Regdate</td>
            <td><?php   echo $regdate;  ?>
      &nbsp;</td>
          </tr>
        </table>
    </blockquote></td>
    <td>&nbsp;</td>
    <td valign="top"><form name="form2" method="post" action="freply3.php">
        <table width="200" border="3">
          <tr>
            <td><div align="center">Reply</div></td>
          </tr>
          <tr>
            <td height="122"><textarea name="t2" cols="35" rows="5" id="t2"><?php echo $s2;     ?></textarea></td>
          </tr>
          <tr>
            <td height="21"><div align="center">
            <?php
			
			$rdate=date("Y")."-".date("m")."-".date("d");
			$s="update feedback set reply='$s2',rdate='$rdate'  where fid=$s1";
			mysql_query($s);
			echo "Reply send";
			
			
			?></div></td>
          </tr>
        </table>
	    <?php
	  echo "<input type='hidden' name='t1' value='$s1'>";
	  
	  ?>
    </form></td>
    <td></td>
  </tr>
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="0"></td>
    <td width="191"></td>
    <td></td>
    <td></td>
    <td></td>
    <td width="143"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
