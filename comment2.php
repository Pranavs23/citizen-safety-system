<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body> 
<?php include("p1.php"); ?>
<table width="1159" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr>
    <td width="23" height="17"></td>
    <td width="1136"></td>
  </tr>
  <tr>
    <td height="345"></td>
    <td valign="top"><div align="center">POST YOUR COMMENT 
        <form name="form1" method="post" action="">
	      <?php
	   $s1=$_POST["t1"];
	   $s2=$_POST["t2"];
	   $s3=$_POST["t3"];
	   $s4=$_POST["t4"];
	   ?>
	     
        <table width="483" border="0">
            <tr>
              <td width="226">Name</td>
              <td width="237"><input name="t1" type="text" id="t1" value="<?php echo $s1; ?>" disabled></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input name="t2" type="text" id="t2" value="<?php echo $s2; ?>" disabled></td>
            </tr>
            <tr>
              <td>E-mail </td>
              <td><input name="t3" type="text" id="t3"value="<?php echo $s3; ?>" disabled></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">comment</div></td>
            </tr>
            <tr>
              <td colspan="2"><textarea name="t4" cols="45" id="t4" disabled><?php  echo $s4; ?></textarea></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
			  <?php
			include("connection.php");
			$cmNo=0;
			 $s=mysql_query("select* from comment order by cmNo desc");
		   if($row=mysql_fetch_array($s))
		   {  $cmNo=$row[0];
		   }
		   $cmNo++;
		   $Cdate=date("Y")."-".date("m")."-".date("d");
		   $s="insert into comment values($cmNo,'$s1','$s2','$s3','$s4','$Cdate')";
		   mysql_query($s);
		   echo"<font color='#ffffff'>comment recieved... your comment number is $cmNo....</font>";
		   ?>
                </div></td>
            </tr>
          </table>
        </form>
    </div></td>
  </tr>
</table>
</body>
</html>
