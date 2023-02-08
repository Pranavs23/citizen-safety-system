<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="" || document.form1.t2.value=="" || document.form1.t3.value=="" || document.form1.t4.value=="" )
{
alert("Please Enter the details");
return(false);
}

if(document.form1.t2.value.length<10)
{
alert("Phone  should be Min 10 digits");
return(false);
}

if(document.form1.t3.value.indexOf("@")==-1 || document.form1.t3.value.indexOf("@")==0 || document.form1.t3.value.indexOf(".")==-1 || document.form1.t3.value.indexOf(".")==0)
{
alert("Invalid E-mail");
return(false);
}
}
</script>
<body> 
<?php include("p1.php"); ?>
<table width="923" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr>
    <td width="133" height="17"></td>
    <td width="790"></td>
  </tr>
  <tr>
    <td height="345"></td>
    <td valign="top"><div align="center">
      <p>POST YOUR COMMENT </p>
      <p>&nbsp;        </p>
      <form name="form1" method="post" onSubmit="return abc()" action="comment2.php">
          <table width="469" border="0">
            <tr>
              <td width="201">Name</td>
              <td width="258"><input name="t1" type="text" id="t1"  onKeyPress="return alphabets(event)"></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input name="t2" type="text" id="t2"  onKeyPress="return numbers(event)" maxlength="13"></td>
            </tr>
            <tr>
              <td>E-mail </td>
              <td><input name="t3" type="text" id="t3"  onKeyPress="return email(event)"></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">comment</div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                <textarea name="t4" cols="45" id="t4"></textarea>
              </div></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Submit2" value="Reset">
              </div></td>
            </tr>
          </table>
        </form>
    </div></td>
  </tr>
</table>
</body>
</html>
