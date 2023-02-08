<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if( document.form1.t2.value=="" || document.form1.t2.value=="" || document.form1.t3.value=="" || document.form1.t4.value==""  || document.form1.t5.value==""  || document.form1.t7.value==""  || document.form1.t8.value=="")
{
alert("Please Enter the Details");
return(false);
}

if(document.form1.t4.value.length<6)
{
alert("Pin  should be 6 digits");
return(false);
}

if(document.form1.t5.value.length<10)
{
alert("Phone  should be Min 10 digits");
return(false);
}
if(document.form1.t7.value.indexOf("@")==-1 || document.form1.t7.value.indexOf("@")==0 || document.form1.t7.value.indexOf(".")==-1 || document.form1.t7.value.indexOf(".")==0)
{
alert("Invalid E-mail");
return(false);
}
var x=Number(document.form1.t8.value);
if(x<18 || x>56)
{
alert("Age should be min 18 and max 56 years");
return(false);
}


}
</script>
<body>
<?php include("p2.php"); ?>

<table width="1200" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="102" height="25">&nbsp;</td>
    <td width="766">&nbsp;</td>
    <td width="14">&nbsp;</td>
    <td width="309">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr>
    <td height="272">&nbsp;</td>
    <td rowspan="2" valign="top"><div align="center">
        <p><strong>POLICE STATION STAFF REGISTERATION </strong></p>
        <form name="form1" method="post" action="policestationstaffregn2.php" onSubmit="return abc()">
          <table width="614" border="0">
            <tr>
              <td width="138">Name</td>
              <td width="165"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
              <td width="122">House Name </td>
              <td width="171"><input name="t2" type="text" id="t2"  onKeyPress="return alphabets(event)"></td>
            </tr>
            <tr>
              <td>Place</td>
              <td><input name="t3" type="text" id="t3"  onKeyPress="return alphabets(event)"></td>
              <td>Pin</td>
              <td><input name="t4" type="text" id="t4"  onKeyPress="return numbers(event)" maxlength="6"></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><input name="t5" type="text" id="t5"  onKeyPress="return numbers(event)" maxlength="13"></td>
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
              <td><input name="t7" type="text" id="t7"  onKeyPress="return email(event)"></td>
            </tr>
            <tr>
              <td>Age</td>
              <td><input name="t8" type="text" id="t8"  onKeyPress="return numbers(event)" maxlength="2"></td>
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
              <td height="43">Select Police Station </td>
              <td height="43"><select name="t10" id="select2">
                <?php
			include("connection.php");
			$s=mysql_query("select * from pstation");
			while ($row=mysql_fetch_array($s))
			{
			echo"<option> $row[0] </option>";
			}
			?>
              </select></td>
              <td height="43" colspan="2">&nbsp;</td>
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
    <td valign="top"><p>Police Stations List</p>      <p><?php 
	include("connection.php");
	$s=mysql_query("select*from pstation");
	echo "<table border='1'><tr><th>PID</th><th>LOCATION</th><th>PHONE</th><th>DISTRICT</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";
	}
	echo"</table>";
	?>
	&nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="11"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
