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
<table width="1167" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="143" height="390">&nbsp;</td>
    <td width="828" valign="top"><form name="form1" method="post" action="">
       <p align="center" class="style1">Crime Type Registration </p>
       <?php
	   $s1=$_POST["t1"];
	   $s2=$_POST["t2"];
	   $s3=$_POST["t3"];
	   
	   
	   
	   ?><table width="334" border="0" align="center">
         <tr>
           <td width="138">Type Name </td>
           <td width="138"><input type="text" name="textfield" value="<?php echo $s1; ?>" disabled></td>
         </tr>
         <tr>
           <td>Section No </td>
           <td><input name="t2" type="text" id="t2" value="<?php echo $s2; ?>" disabled>
           </td>
         </tr>
         <tr>
           <td colspan="2"><p align="center"><strong>Max Punishment</strong></p>
               <p>
                 <textarea name="t3" cols="60" rows="7" id="t3" disabled><?php echo $s3; ?></textarea>
             </p></td>
         </tr>
         <tr>
           <td colspan="2"><div align="center"><?php
		   
		   include("connection.php");
		   $s=mysql_query("select* from crimetype where Typename='$s1'");
		   if(mysql_num_rows($s)>0)
		   echo"<b>This Type name exist";
		   else
		   {
		   $s="insert into crimetype values('$s1','$s2','$s3')";
		   mysql_query($s);
		   echo"stored";
		   }
		   ?>
               </div></td>
         </tr>
       </table>
       <p align="center" class="style1">&nbsp;</p>
    </form></td>
    <td width="196">&nbsp;</td>
  </tr>
</table>
</body>
</html>
