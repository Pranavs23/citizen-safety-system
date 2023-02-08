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
<?php include("p2.php"); ?>


<table width="969" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="179" height="26">&nbsp;</td>
    <td width="631">&nbsp;</td>
    <td width="159">&nbsp;</td>
  </tr>
  <tr>
    <td height="210">&nbsp;</td>
    <td valign="top"><div align="center"><span class="style1">Police Station Registration </span>
	   
        <form name="form1" method="post" action="">
          <?php
	   $s1=$_POST["t1"];
	   $s2=$_POST["t2"];
	   $s3=$_POST["t3"];
	   $s4=$_POST["t4"];
	   ?>
	    
        <table width="324" border="0">
            <tr>
              <td width="156" height="23">Locality</td>
              <td width="152"><?php echo $s1;?>&nbsp;</td>
            </tr>
            <tr>
              <td>Pin</td>
              <td><?php echo $s2;?>&nbsp;</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><?php echo $s3;?>&nbsp;</td>
            </tr>
            <tr>
              <td>District</td>
              <td><?php echo $s4;?>&nbsp;              </td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
			  <?php  include("connection.php");
			$pid="P100";
		   $s=mysql_query("select* from pstation order by pid desc");
		   if($row=mysql_fetch_array($s))
		   		{
				$pid=$row[0];
				}
				$pid++;
		   
		   $s="insert into pstation values('$pid','$s1','$s2','$s3','$s4')";
		   mysql_query($s);
		   echo"<b>Registration Success....The ID is $pid";
		   
		   ?>
                </div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="136">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
