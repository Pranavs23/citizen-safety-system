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
alert("Please Enter ID and Password");
return(false);
}

}
</script>
<body>
<?php include("p2.php"); ?>
<table width="1167" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="143" height="390">&nbsp;</td>
    <td width="828" valign="top"><form name="form1" onSubmit="return abc()" method="post" action="crimetypereg2.php">
       <p align="center" class="style1">Crime Type Registration </p>
       <table width="334" border="0" align="center">
         <tr>
           <td width="138">Type Name </td>
           <td width="138"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
         </tr>
         <tr>
           <td>Section No. </td>
           <td><input name="t2" type="text" id="t2"></td>
         </tr>
         <tr>
           <td colspan="2"><p align="center"><strong>Max Punishment</strong></p>
               <p>
                 <textarea name="t3" cols="60" rows="7" id="t3"></textarea>
             </p></td>
         </tr>
         <tr>
           <td colspan="2"><div align="center">
               <input type="submit" name="Submit" value="Submit">
               <input type="reset" name="Submit2" value="Reset">
           </div></td>
         </tr>
       </table>
       <p align="center" class="style1">&nbsp;</p>
    </form></td>
    <td width="196">&nbsp;</td>
  </tr>
</table>
</body>
</html>
