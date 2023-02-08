<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<style>
body,
.bg
{
background-image:url("./back/design5.jpg");
background-repeat:no-repeat;
background-size: cover;
color: black;
background-position: inherit;
}
.style1 {
	color: #FF0000;
	font-weight: bold;
}
</style>



<style type="text/css">

input[type=text],input[type=password]{
width:80%;
height:7px;
border-radius: 7px;
padding:7px;
background-color:#FFFFCC;
color:#FF0000;



}
input[type=submit],input[type=reset]{
padding:10px;
background-color:#FFFFFF;
font-size: 14px;
margin: 10px;
width:auto;
border-radius:20px;
border: 1px solid #ff7101;
color:#333333;

}

textarea {
	
	width: 90%;
	height: 80px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
	border-radius: 8px;
	background-color:#FFFFCC;
	color:#FF0000;
}

select {
	
	width: 80%;
	height: 30px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahomr4a, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
	border-radius: 8px;
	background-color:#FFFFCC;
	color:#FF0000;
}
</style>

<script  language="javascript">

function numbers(event)
{

var charCode=event.keyCode;
if(charCode>31&&(charCode<48||charCode>57))
return false;

}
function alphabets(event)
{
var charCode=event.keyCode;
if((charCode>=65&&charCode<=90)||(charCode>=97&&charCode<=122)||charCode==32)
return true;
else
return false;
}


function email(event)
{
var charCode=event.keyCode;
if((charCode>=65&&charCode<=90)||charCode==32)
return false;
else
return true;
}

</script>











<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="192" colspan="3" valign="top" bgcolor="#66FFFF"><img src="back/head.jpg" width="100%" height="192"></td>
  </tr>
  <tr>
    <td width="34" height="22" valign="top"><a href="applicantprocess.php">Back</a></td>
    <td width="933" valign="top" bgcolor="#FFFF00"><marquee behavior="alternate">
    <span class="style1">Welcome To Applicant Process </span>
    </marquee></td>
    <td width="15">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" colspan="3" valign="top"><?php include("applicantmenu.htm"); ?>&nbsp;</td>
  </tr>
</table>
</body>
</html>
