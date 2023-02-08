<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<script>
function abc()
{
if(document.form1.t1.value=="" || document.form1.t2.value=="" || document.form1.t3.value=="" || document.form1.t4.value=="" || document.form1.t5.value=="" || document.form1.t7.value=="" || document.form1.t8.value=="")
{
alert("Please Enter Details");
return(false);
}


if(document.form1.t4.value.length<6)
{
alert("Pin should be 6 digits");
return(false);
}

if(document.form1.t5.value.length<10)
{
alert("Phone should be min  10 digits");
return(false);
}

if(document.form1.t7.value.indexOf("@")==-1 || document.form1.t7.value.indexOf("@")==0 || document.form1.t7.value.indexOf(".")==-1 || document.form1.t7.value.indexOf(".")==0)
{
alert("Invalid E-mail");
return(false);
}
var x=Number(document.form1.t8.value);
if(x<18 || x>55)
{
alert("Age should be between 18 and 55");
return(false);
}
}
</script>
<body>
<?php include("p2.php"); ?>

<table width="1080" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="150" height="25">&nbsp;</td>
    <td width="766">&nbsp;</td>
    <td width="164">&nbsp;</td>
  </tr>
  <tr>
    <td height="250">&nbsp;</td>
    <td valign="top"><div align="center">
        <p><strong>ADMIN STAFF REGISTRATION </strong></p>
        <form name="form1" method="post" onSubmit="return abc()" action="adminstaffregn2.php">
          <table width="680" border="0">
            <tr>
              <td width="125">Name</td>
              <td width="254"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)" maxlength="30"></td>
              <td width="122">House Name </td>
              <td width="161"><input name="t2" type="text" id="t2" onKeyPress="return alphabets(event)" maxlength="30"></td>
            </tr>
            <tr>
              <td>Place</td>
              <td><input name="t3" type="text" id="t3" onKeyPress="return alphabets(event)" maxlength="30"></td>
              <td>Pin</td>
              <td><input name="t4" type="text" id="t4" onKeyPress="return numbers(event)" maxlength="6"></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input name="t5" type="text" id="t5" onKeyPress="return numbers(event)" maxlength="13"></td>
              <td>Gender</td>
              <td><input name="r1" type="radio" value="M"> 
                male
                <input name="r1" type="radio" value="F" checked>
              female</td>
            </tr>
            <tr>
              <td>District</td>
              <td><select name="t6" size="1" id="t6">
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
              <td>Email</td>
              <td><input name="t7" type="text" id="t7" onKeyPress="return email(event)" maxlength="30"></td>
            </tr>
            <tr>
              <td>Age</td>
              <td><input name="t8" type="text" id="t8" onKeyPress="return numbers(event)" maxlength="2"></td>
              <td>Designation</td>
              <td><select name="t9"size="1" id="t9">
                <option>CLERK</option>
                <option>ASI</option>
                <option>SI</option>
                <option>CI</option>
                <option>DYSP</option>
                <option>DGP</option>
                <option>IG</option>
              </select></td>
            </tr>
            <tr>
              <td height="43" colspan="4"><div align="center">
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
    <td height="95"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
