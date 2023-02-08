<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="1066" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="102" height="25">&nbsp;</td>
    <td width="766">&nbsp;</td>
    <td width="198">&nbsp;</td>
  </tr>
  <tr>
    <td height="552">&nbsp;</td>
    <td valign="top"><div align="center">
      <p><strong>YOUR PROFILE </strong></p>
    
	    <?php
		session_start();
		$admstaffid=$_SESSION["adminstaffid"];
		include("connection.php");
		$s=mysql_query("select * from adminstaff a, useraddress b where a.Eno=b.Eno and a.admstaffid='$admstaffid'");
		if($row=mysql_fetch_array($s))
		{
		
		$name=$row[5];
		$admstaffid=$row[0];
		$Eno=$row[1];
		$design=$row[2];
	    $pswd=$row[3];
		$hname=$row[6];
		$place=$row[7];
		$pin=$row[8];
		$ph=$row[9];
		$sex=$row[10];
	    $dist=$row[11];
		$email=$row[12];
        $age=$row[13];
		$regdate=$row[14];
		$Eno=$row[4];
		}
		?>
		
		<table width="667" border="1">
          <tr>
            <td width="153">Name</td>
            <td width="156"><?php echo $name; ?>&nbsp;</td>
            <td width="177">House name </td>
            <td width="153"><?php echo $hname; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Place</td>
            <td><?php echo $place; ?>&nbsp;</td>
            <td>Pin</td>
            <td><?php echo $pin; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?php echo $ph; ?>&nbsp;</td>
            <td>Gender</td>
            <td><?php echo $sex; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>District</td>
            <td><?php echo $dist; ?>&nbsp;</td>
            <td>Email</td>
            <td><?php echo $email; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Age</td>
            <td><?php echo $age; ?>&nbsp;</td>
            <td>Regdate</td>
            <td><?php echo $regdate; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Designation</td>
            <td colspan="3"><?php echo $design; ?>&nbsp;</td>
            </tr>
        </table>
 
      </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="39">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
