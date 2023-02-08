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


<table width="1183" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="295" height="17"></td>
    <td width="740"></td>
    <td width="148"></td>
  </tr>
  <tr>
    <td height="325"></td><script>
	function abc()
	{
	if(document.form1.t1.value=="")
	{
	alert("Please Enter Feedback...");
	return(false);
	}
	}
	</script>
    <td valign="top"><div align="center" class="style1">Send Feedback 
        <form name="form1" method="post" onSubmit="return abc()" action="feed22.php">
          <table width="594" border="0">
            <tr>
              <td width="580" height="189"><textarea name="t1" cols="70" rows="8" id="t1"></textarea></td>
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
    <td height="61"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
