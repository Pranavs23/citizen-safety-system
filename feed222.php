<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
</head>

<body>
<?php include("p5.php"); ?>
<table width="914" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="153" height="18"></td>
    <td width="740"></td>
    <td width="21"></td>
  </tr>
  <tr>
    <td height="343"></td>
    <td valign="top"><div align="center" class="style1">Send Feedback 
        <form name="form1" method="post" action="feed2.php"><?php $s1=$_POST["t1"];?>
          <table width="322" border="0">
            <tr>
              <td width="308" height="189"><textarea name="t1" cols="70" rows="8" id="t1"><?php echo $s1; ?></textarea></td>
            </tr>
            <tr>
              <td height="59"><?php
			session_start();
			$Applno=$_SESSION["Applno"];
			include("connection.php");
				$fid=0;
				$s=mysql_query("select * from feedback  order by fid desc");
				if($row=mysql_fetch_array($s))
				{
				$fid=$row[0];
				}
				$fid++;
				$fdate=date("Y")."-".date("m")."-".date("d");
				$s="insert into feedback(fid,feedback,fdate,Applno) values($fid,'$s1','$fdate','$Applno')";
				mysql_query($s);
				echo "<b>Your Feedback Send with the ID $fid...<br>Please wait for the Reply";
			
			?><div align="center"></div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="20"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
