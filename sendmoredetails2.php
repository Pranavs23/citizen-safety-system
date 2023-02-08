<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p5.php"); ?>
<table width="1073" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="259" height="23">&nbsp;</td>
    <td width="573">&nbsp;</td>
    <td width="241">&nbsp;</td>
  </tr>
  <tr>
    <td height="375"></td>
    <td valign="top"><div align="center"><strong>Send more details</strong>
        <form name="form1" method="post" action="sendmoredetails2.php">
	    <?php
	$s2=$_POST["t1"];
	?>
	  
        <table width="377" height="299" border="0">
            <tr>
              <td height="230"><textarea name="t1" cols="75" rows="15" id="t1"><?php echo $s2;?></textarea></td>
            </tr>
            <tr>
              <td height="21"><?php 
			
			include("connection.php");
			session_start();
			$Applno=$_SESSION["Applno"];
			
			
			 $s=mysql_query("select * from fir where applno=$Applno");
			
			if($row=mysql_fetch_array($s))
			{$firno=$row[0];
			}
		$cdate=date("y")."-".date("m")."-".date("d");
		$entno=0;
		 $s=mysql_query("select * from appmore where firno='$firno' order by entno desc");
		    if($row=mysql_fetch_array($s))
			{$entno=$row[1];
			}
			$entno++;
			$s="insert into appmore values('$firno','$entno','$s2','$cdate')";
			mysql_query($s);
			echo "Your details received...The entry No. is $entno";
			

			?>              <div align="center"></div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="13"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
