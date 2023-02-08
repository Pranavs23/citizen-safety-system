<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style4 {font-size: 16px}
-->
</style>
</head>
<script>
function abc()
{
if(document.form1.t1.value=="")
{
alert("Please Enter Alert- Details");
return(false);

}

if(document.form1.file.value=="")
{
alert("Please select Picture...to Upload");
return(false);

}
}

</script>
<body><?php include("p4.php"); ?>


<table width="1180" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="211" height="400">&nbsp;</td>
    <td width="760" valign="top"><div align="center" class="style1">Alert Entry 
        <form action="alert2.php" onSubmit="return abc()" method="post" enctype="multipart/form-data" name="form1">
          <table width="552" border="0">
            <tr>
              <td width="193"><span class="style4">Alert Type </span></td>
              <td width="339"><select name="c1" id="c1">
                <option>Murder</option>
                <option>Missing</option>
                <option>Theft</option>
                <option>Accident</option>
              </select></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center"><span class="style4">Alert</span></div></td>
            </tr>
            <tr>
              <td colspan="2"><textarea name="t1" cols="60" rows="7" id="t1"></textarea></td>
            </tr>
            <tr>
              <td><span class="style4">Select Picture </span></td>
              <td><input type="file" name="file"></td>
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
    <td width="209">&nbsp;</td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
