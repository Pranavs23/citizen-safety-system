<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p5.php"); ?>
<table width="1148" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="20" height="24"></td>
    <td width="149"></td>
    <td colspan="4" valign="top"><div align="center"><strong>Your Case Details </strong></div></td>
    <td width="198">&nbsp;</td>
    <td width="169">&nbsp;</td>
  </tr>
  <tr>
    <td height="19"></td>
    <td></td>
    <td width="16">&nbsp;</td>
    <td width="351">&nbsp;</td>
    <td width="97">&nbsp;</td>
    <td width="148">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="75"></td>
    <td></td>
    <td>&nbsp;</td>
    <td rowspan="3" valign="top">Details
      <?php
	  include("connection.php");
	  session_start();
	  $s1=$_SESSION["Applno"];
	  
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
      <table width="337" height="252" border="0">
        <!--DWLayoutTable-->
        <tr>
          <td>Appl No </td>
          <td><?php echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="83">Name</td>
          <td width="234"><?php echo $name; ?>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><table width="333" height="130" border="3">
      <tr>
        <td width="319" height="44"><div align="center">Complaint</div></td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="">
            <textarea name="textarea"><?php echo $complaint;?></textarea>
        </form></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="202"></td>
    <td rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="40"></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
