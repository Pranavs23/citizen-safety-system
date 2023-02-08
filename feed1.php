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
<script>
function abc()
{
if(document.form1.t1.value=="")
{
alert("Please Enter Feedback....");
return(false);
}
}

</script>
<body>
<?php include("p3.php"); ?>
<table width="1198" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="183" height="14"></td>
    <td width="740"></td>
    <td width="275"></td>
  </tr>
  <tr>
    <td height="324"></td>
    <td valign="top"><div align="center" class="style1">Send Feedback 
        <form name="form1" method="post" onSubmit="return abc()" action="feed2.php">
          <table width="595" border="0">
            <tr>
              <td width="581" height="189"><textarea name="t1" cols="70" rows="8" id="t1"></textarea></td>
            </tr>
            <tr>
              <td height="59"><div align="center">
                <input type="submit" name="Submit" value="Send">
              </div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td></td>
  </tr>
  <tr>
    <td height="65"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
