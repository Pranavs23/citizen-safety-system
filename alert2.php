<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style4 {font-size: 16px}
-->
</style>
</head>

<body>
<?php include("p4.php"); ?>

<table width="1149" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="226" height="32">&nbsp;</td>
    <td width="601">&nbsp;</td>
    <td width="102">&nbsp;</td>
    <td width="220">&nbsp;</td>
  </tr>
  <tr>
    <td height="53">&nbsp;</td>
    <td rowspan="3" valign="top"><div align="center" class="style1">Alert Entry </div>      <form action="alert2.php" method="post" enctype="multipart/form-data" name="form1">
        <?php
	  $s1=$_POST["c1"];
	  $s2=$_POST["t1"];
	  
	  
	  ?>
        <table width="482" border="0" align="center">
          <tr>
            <td width="147"><span class="style4">Alert Type </span></td>
            <td width="315"><?php echo $s1; ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><span class="style4">Alert</span></div></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="t1" cols="60" rows="7" id="t1" disabled><?php echo $s2; ?></textarea></td>
          </tr>
          <tr>
            <td><span class="style4">select picture </span></td>
            <td>Selected</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <?php
				include("connection.php");
				$alertno=0;
				$s=mysql_query("select * from alert  order by alertno desc");
				if($row=mysql_fetch_array($s))
				{
				$alertno=$row[0];
				}
				$alertno++;
				$alertdate=date("Y")."-".date("m")."-".date("d");
				
				$Filename=$_FILES["file"]["name"];
			$x=split("[.]",$Filename);
			$n=count($x);
			$n--;
			$ext = $x[$n];
			$filename="$alertno.$ext";
			move_uploaded_file($_FILES["file"]["tmp_name"],"./alert/$filename");
			session_start();
			$pstaffid=$_SESSION["Pstaffid"];
			
			
			$s="insert into alert values($alertno,'$s1','$s2','$pstaffid','$alertdate','$filename')";
			mysql_query($s);
			echo "<b>Alert Entry Success...The Alert No. $alertno";
			
				
				?></div></td>
          </tr>
        </table>
      </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="249">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><?php
	
	echo "<img src='./alert/$filename'  width='200'  height='200'>";
	
	?>      &nbsp;</td>
  </tr>
  <tr>
    <td height="98">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="138">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
