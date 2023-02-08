<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="")
{
alert("Please Enter Details");
return(false);
}

}

</script>
<body>
<?php include("p5.php"); ?>
<table width="1059" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="187" height="363">&nbsp;</td>
    <td width="573" valign="top"><div align="center"><strong>Send More Details</strong>
        <form name="form1" method="post" onSubmit="return abc()" action="sendmoredetails2.php">
          <table width="377" height="299" border="0">
            <tr>
              <td height="230"><textarea name="t1" cols="75" rows="15" id="t1"></textarea></td>
            </tr>
            <tr>
              <td height="21"><div align="center">
                <input type="submit" name="Submit" value="Send">
              </div></td>
            </tr>
          </table>
        </form>
    </div></td>
    <td width="299">&nbsp;</td>
  </tr>
  <tr>
    <td height="36">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
