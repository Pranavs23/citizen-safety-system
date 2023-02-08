<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 16px}
-->
</style>
</head>

<body>

<?php include("p1.php"); ?>
<table width="939" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="75" height="18"></td>
    <td width="666"></td>
    <td width="198"></td>
  </tr>
  <tr>
    <td height="344"></td>
    <td valign="top"><div align="center" class="style1">
      <p>View Alert </p></div>
      <form name="form1" method="post" action="viewalert2.php"><?php
	  $s1=$_POST["c1"];
	  
	  
	  ?>
        <table width="318" border="3" align="center">
          <tr>
            <td width="95"><span class="style2">select type </span></td>
            <td width="118"><select name="c1" id="c1">
			<?php echo "<option>$s1</option>"; ?>
              <option>Murder</option>
              <option>Missing</option>
              <option>Theft</option>
              <option>Accident</option>
            </select></td>
            <td width="79"><input type="submit" name="Submit" value="view"></td>
          </tr>
        </table>
      </form>
      <p>
        <?php 
	include("connection.php");
	$s=mysql_query("select*from alert  where alerttype='$s1'");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No alerts...";
	  else
	  {
	  echo "<center><b>Alert</b>";
	echo "<center><table border='1' width='50%'><tr><th>Alert no</th><th>Date</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[4]</td><td><form action='viewalert3.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='hidden' name='c1'  value='$s1'><input type='image' src='./alert/$row[5]' width='50' height='50'></form></td></tr>";
	}
	echo"</table>";
	}
	?>
      </p>
    </td>
    <td></td>
  </tr>
  <tr>
    <td height="4"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
