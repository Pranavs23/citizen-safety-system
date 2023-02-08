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

<script>
function abc()
{
if(document.form1.t1.value=="" || document.form1.t2.value=="" || document.form1.t3.value=="")
{
alert("Please Enter Details");
return(false);
}


if(document.form1.t2.value.length<6)
{
alert("Pin should be 6 digits");
return(false);
}

if(document.form1.t3.value.length<10)
{
alert("Phone should be min  10 digits");
return(false);
}
}
</script>
<body>
<?php include("p2.php"); ?>

<table width="1063" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="193" height="26">&nbsp;</td>
    <td width="631">&nbsp;</td>
    <td width="239">&nbsp;</td>
  </tr>
  <tr>
    <td height="200">&nbsp;</td>
    <td valign="top"><div align="center"><span class="style1">Police Station Registration </span>
        <form name="form1" onSubmit="return  abc()" method="post" action="preg2.php">
          <table width="398" border="0">
            <tr>
              <td width="152">Locality</td>
              <td width="230"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)" maxlength="30"></td>
            </tr>
            <tr>
              <td>Pin</td>
              <td><input name="t2" type="text" id="t2"  onKeyPress="return numbers(event)" maxlength="6"></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input name="t3" type="text" id="t3"  onKeyPress="return numbers(event)" maxlength="13"></td>
            </tr>
            <tr>
              <td>District</td>
              <td><select name="t4" size="1" id="t4">
                <option>THIRUVANANTHAPURAM</option>
                <option>KOLLAM</option>
                <option>PATHANAMTHITTA</option>
                <option>ALAPPUZHA</option>
                <option>KOTTAYAM</option>
                <option>IDUKKI</option>
                <option>ERNAKULAM</option>
                <option>THRISSUR</option>
                <option>PALAKKAD</option>
                <option>MALAPPURAM</option>
                <option>WAYANAD</option>
                <option>KOZHIKODE</option>
                <option>KANNUR</option>
                <option>KASARGOD</option>
                        </select></td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="177"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
