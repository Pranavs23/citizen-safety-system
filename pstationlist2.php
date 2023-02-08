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

<body>
<?php include("p1.php"); ?>
<table width="935" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="150" height="312"></td>
    <td width="514" valign="top"><p align="center" class="style1">Police Stations List </p>
      <form name="form1" method="post" action="pstationlist2.php"><?php $s1=$_POST["select"];  ?>
        <table width="395" border="0" align="center">
          <tr>
            <td width="98">Select District </td>
            <td width="228"><select name="select" size="1">
			<?php echo "<option>$s1</option>";   ?>
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
			  <option>VAYANAD</option>
              <option>KOZHIKODE</option>
              <option>KANNUR</option>
              <option>KASARGOD</option>
            </select></td>
            <td width="55"><input type="submit" name="Submit" value="View"></td>
          </tr>
        </table>
      </form>      <p>
        <?php 
	include("connection.php");
	$s=mysql_query("select*from pstation   where district='$s1'");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No Policestations Registrered...";
	  else
	  {
	  echo "<center><b>Police Stations</b>";
	echo "<center><table border='1' width='100%'><tr><th>PID</th><th>LOCATION</th><th>PHONE</th><th>DISTRICT</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";
	}
	echo"</table>";
	}
	?>
      </p></td>
    <td width="271"></td>
  </tr>
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
