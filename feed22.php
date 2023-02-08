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
<?php include("p4.php"); ?>

<table width="1212" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="348" height="14"></td>
    <td width="740"></td>
    <td width="124"></td>
  </tr>
  <tr>
    <td height="343"></td>
    <td valign="top"><div align="center" class="style1">Send Feedback 
        <form name="form1" method="post" action="feed2.php"><?php $s1=$_POST["t1"];?>
          <table width="665" border="3">
            <tr>
              <td width="651" height="189"><textarea name="t1" cols="70" rows="8" id="t1"><?php echo $s1; ?></textarea></td>
            </tr>
            <tr>
              <td height="59"><?php
			session_start();
			$Pstaffid=$_SESSION["Pstaffid"];
			include("connection.php");
				$fid=0;
				$s=mysql_query("select * from feedback  order by fid desc");
				if($row=mysql_fetch_array($s))
				{
				$fid=$row[0];
				}
				$fid++;
				$fdate=date("Y")."-".date("m")."-".date("d");
				$s="insert into feedback(fid,feedback,fdate,Pstaffid) values($fid,'$s1','$fdate','$Pstaffid')";
				mysql_query($s);
				echo "<font color='red'><b>Your Feedback Send with the ID $fid...<br>Please wait for the Reply";
			
			?><div align="center"></div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="24"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
