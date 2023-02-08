<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<script>
function abc()
{
if(document.form1.t1.value=="" || document.form1.t2.value=="")
{
alert("Please Enter ID and Password");
return(false);
}

}
</script>
<body>
<?php include("p1.php"); ?>
<table width="1308" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="312" height="204">&nbsp;</td>
    <td width="434" valign="top"><p align="center"><strong>Admin Login</strong></p>      <form name="form1" onSubmit="return abc()" method="post" action="adlogin2.php">
        <table width="291" border="0" align="center">
          <tr>
            <td width="164">User ID </td>
            <td width="111"><input name="t1" type="text" id="t1"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="t2" type="password" id="t2"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
            <?php
		  
		  include("connection.php");
		  $s1=$_POST["t1"];
		  $s2=$_POST["t2"];
		  $s=mysql_query("select * from login where userid='$s1'  and password='$s2'");
		  if(mysql_num_rows($s)==0)
		     echo "<b> Invalid ID or Password";
			else
			  header('location:adminprocess.php');
			   
		  
		  ?>   
            <p>
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Submit2" value="Reset">
            </p>
            </div></td>
          </tr>
        </table>
      </form>      <p>&nbsp;</p>      <p>&nbsp; </p></td>
    <td width="562">&nbsp;</td>
  </tr>
  <tr>
    <td height="229">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
