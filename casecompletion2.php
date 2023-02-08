<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include ("p4.php"); ?>

<table width="1222" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="171" height="44">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>case completion </strong></div></td>
    <td width="65">&nbsp;</td>
    <td width="417">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" valign="top"><?php
	$s1=$_POST["t1"];

			include("connection.php");
			session_start();
			$pid=$_SESSION["pid"];
			
			 $s=mysql_query("select * from capproval a,fir b where a.pid='$pid'  and a.permission='Y' and a.applno=b.applno and b.firno not in(select firno from ccompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> No new cases";
			else
			{
			echo"<table border='0'  width='100%'  bgcolor='#ooffaa''><tr><th>FIR no</th><th>Ddate</th><th>FIRdate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[9]</td><td>$row[2]</td><td>$row[11]</td><td><form action='casecompletion2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;
    <div align="right"></div></td>
    <td width="11" height="301">&nbsp;</td>
    <td width="165" valign="top">Details
      <?php
	  include("connection.php");
	  
	  $s=mysql_query("select * from fir where firno='$s1'");
	  if($row=mysql_fetch_array($s))
	  {
	  $applno=$row[1];
	  }
	  
	
		$s=mysql_query("select* from capplication a,useraddress b  where a.eno=b.eno and a.applno=$s1");
		if($row=mysql_fetch_array($s))
		{
		$name=$row[6];
		$hname=$row[7];
		$place=$row[8];
		$pin=$row[9];
		$phone=$row[10];
		$sex=$row[11];
		$dist=$row[12];
		$email=$row[13];
		$age=$row[14];
		$regdate=$row[15];
		$cdate=$row[2];
		$complaint=$row[3];
		
		}
		?>
      <table width="155" height="252" border="3">
        <!--DWLayoutTable-->
        <tr>
          <td>Appl No </td>
          <td><?php echo $s1; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="83">Name</td>
          <td width="52"><?php echo $name; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>House name </td>
          <td><?php echo $hname; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Place</td>
          <td><?php echo $place; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Pin</td>
          <td><?php echo $pin; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><?php echo $phone; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Sex</td>
          <td><?php echo $sex; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>District</td>
          <td><?php echo $dist; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $email; ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="23">Age</td>
          <td><?php echo $age; ?>&nbsp;</td>
        </tr>
      </table></td>
    <td>&nbsp;</td><script>
	function abc()
	{
	if(document.form1.t2.value=="")
	{
	alert("Please Enter Comment");
	return(false);
	}
	}
	
	</script>
    <td valign="top"><form name="form1" method="post" onSubmit="return abc()" action="casecompletion3.php">
        <table width="345" height="188" border="3">
          <tr>
            <td width="64">Status</td>
            <td width="262"><input name="r1" type="radio" value="s" checked>
            successfull 
            <input name="r1" type="radio" value="u">
            Unsuccessfull</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Comment</div></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="t2" cols="50" id="t2"></textarea></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="Submit" value="Submit">
              <input type="reset" name="Submit2" value="Reset">
            </div></td>
          </tr>
        </table>
		<?php
		echo "<input type='hidden'  name='t1' value='$s1'>";
		?>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="43">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td width="363"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
