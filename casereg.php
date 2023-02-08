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
if( document.form1.t2.value=="" || document.form1.t3.value=="" || document.form1.t4.value==""  || document.form1.t5.value==""  || document.form1.t6.value==""  || document.form1.t9.value==""  || document.form1.t10.value==""  || document.form1.t11.value==""  || document.form1.t12.value==""  || document.form1.t13.value=="")
{
alert("Please Enter the details");
return(false);
}

if(document.form1.t5.value.length<6)
{
alert("Pin  should be 6 digits");
return(false);
}

if(document.form1.t6.value.length<10)
{
alert("Phone  should be Min 10 digits");
return(false);
}
if(document.form1.t9.value.indexOf("@")==-1 || document.form1.t9.value.indexOf("@")==0 || document.form1.t9.value.indexOf(".")==-1 || document.form1.t9.value.indexOf(".")==0)
{
alert("Invalid E-mail");
return(false);
}
var x=Number(document.form1.t10.value);
if(x<10)
{
alert("Applicant should be min 10 years");
return(false);
}

if(document.form1.t11.value !=document.form1.t12.value)
{
alert("Password and Retype Password should be same");
return(false);
}


var today = new Date();
var dd =Number( today.getDate());
var mm = Number( today.getMonth()+1); //January is 0!
var yyyy = Number( today.getFullYear());

var d=Number(document.form1.t101.value);
var m=Number(document.form1.t102.value);
var y=Number(document.form1.t103.value);

if((y==yyyy && m>mm) || (y==yyyy && m==mm && d>dd))
{
alert("Selected Date is Coming");
return(false);
}






}
</script>
<body>
<?php include("p1.php"); ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="90" height="13"></td>
    <td width="1071"></td>
    <td width="67"></td>
  </tr>
  <tr>
    <td height="368"></td>
    <td valign="top"><div align="center"><span class="style1">New Case Registeration</span>
        <form name="form1" method="post" onSubmit="return abc()" action="casereg2.php">
          <table width="915" border="0">
            <tr>
              <td width="136" height="36">Name</td>
              <td colspan="3"><input name="t2" type="text" id="t2" onKeyPress="return alphabets(event)" maxlength="30"></td>
              <td width="161">House name/ No </td>
              <td width="262"><input name="t3" type="text" id="t3" maxlength="30"></td>
            </tr>
            <tr>
              <td height="27">Place</td>
              <td colspan="3"><input name="t4" type="text" id="t4"  onKeyPress="return alphabets(event)" maxlength="30"></td>
              <td>Pin</td>
              <td><input name="t5" type="text" id="t5"  onKeyPress="return numbers(event)" maxlength="6"></td>
            </tr>
            <tr>
              <td height="27">Phone</td>
              <td colspan="3"><input name="t6" type="text" id="t6"  onKeyPress="return numbers(event)" maxlength="13"></td>
              <td>Sex</td>
              <td><input name="t7" type="radio" value="M">              
                Male 
              <input name="t7" type="radio" value="F" checked> 
              Female </td>
            </tr>
            <tr>
              <td height="28">District</td>
              <td colspan="3"><select name="t8" size="1" id="select">
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
                <option>KASARKODE</option>
              </select></td>
              <td>Email</td>
              <td><input name="t9" type="text" id="t9"  onKeyPress="return email(event)"></td>
            </tr>
            <tr>
              <td height="26">Case Date </td>
              <td width="123"><select name="t101" id="t101">
			  <?php
			  for($i=1;$i<=31;$i++)
			     echo "<option>$i</option>";
				 
			  
			  ?>
              </select>              
                Day</td>
              <td width="119"><select name="t102" id="t102">
                <?php
			  for($i=1;$i<=12;$i++)
			     echo "<option>$i</option>";
				 
			  
			  ?>
              </select>
              Month</td>
              <td width="88"><select name="t103" id="select2">
                <?php
				  $y=date("Y");
			  for($i=$y;$i>=$y-2;$i--)
			     echo "<option>$i</option>";
				 
			  
			  ?>
              </select>
              &nbsp; Year </td>
              <td colspan="2"><div align="center"><strong>Complaint </strong></div></td>
            </tr>
            <tr>
              <td height="36">Password</td>
              <td colspan="3"><input name="t11" type="password" id="t11"></td>
              <td colspan="2" rowspan="4"><textarea name="t13" cols="60" rows="7" id="textarea"></textarea></td>
            </tr>
            <tr>
              <td height="32">Retype Password </td>
              <td colspan="3"><input name="t12" type="password" id="t12"></td>
            </tr>
            <tr>
              <td height="33">Age(Min 10 yrs) </td>
              <td height="33" colspan="3"><input name="t10" type="text" id="t10" maxlength="2" onkeypress="return numbers(event)"></td>
            </tr>
            <tr>
              <td height="28" colspan="4"><div align="center">
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="Submit2" value="Reset">
              </div></td>
            </tr>
          </table>
        </form>
    </div></td>
  <td></td>
  </tr>
</table>
</body>
</html>
