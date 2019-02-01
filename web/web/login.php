<?php session_start(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv='expires' content='0'>
<script language="JavaScript" >
window.onerror = new Function("return true;");

function setFormFocus() {
	document.forms[0].username.focus(); 
	document.forms[0].username.select();
}
</script>
</head>

<link href="./login_files/cssLogin.css" rel="stylesheet" type="text/css" />
<body text="#000000" bgcolor="#FFFFFF" onLoad="setFormFocus()" oncontextmenu="return false;">

<form method="post" action=""> 
<BR>
<BR>
<BR>
<BR>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0">
<tr valign="top"><td width="622"><div align="center"><img src="./login_files/7.gif" width="522" height="72"></div></td></tr>
</table>
</div><div align="center"></div><div align="center">
<table border="0" cellspacing="0" cellpadding="0">
<tr valign="top"><td width="125" bgcolor="#EAEAEA"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""></td><td width="299" bgcolor="#EAEAEA"><BR>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr valign="top"><td width="1%" valign="middle"><img width="86" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="1%" valign="middle"><img width="12" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="100%" valign="middle"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
Please identify yourself</td></tr>

<tr valign="top"><td width="1%"><img width="86" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="1%"><img width="12" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td height=20 width="100%"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td></tr>

<tr valign="top"><td width="1%" valign="middle"><img width="86" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
<div align="right"><b>User</b><b>n</b><b>ame:</b></div></td><td width="1%" valign="middle"><img width="12" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="100%" valign="middle"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
<font face="Courier New">
<input name="username" value="" maxlength=50 autocomplete=off></font></td></tr>

<tr valign="top"><td width="1%" valign="middle"><img width="86" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
<div align="right"><b>Password:</b></div></td><td width="1%" valign="middle"><img width="12" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="100%" valign="middle"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
<font face="Courier New">
<input name="password" value="" type="password" maxlength=255 autocomplete=off></font></td></tr>

<tr valign="top"><td width="1%"><img width="86" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="1%"><img width="12" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td height=10 width="100%"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td></tr>

<tr valign="top"><td height=50 width="1%" valign="middle"><img width="86" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="1%" valign="middle"><img width="12" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>
</td><td width="100%" valign="middle"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""><br>

<?php
if(isset($_POST['submit']))
{
if ($_POST['username']=='')
{
echo '<font color="red">Please Enter the Username </font>';
}
else
if ($_POST['password']=='')
{
echo '<font color="red">Please Enter the Password </font>';
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("phonebook",$con);

$pass = md5($password);

$result = mysql_query("SELECT * FROM phoneauthuser WHERE Phone_no=".$username." and Password='".$pass."'",$con);

$row = mysql_fetch_array($result);

if ($row['Phone_no'] != '')
{

$_SESSION['userid']=$username;

mysql_close();
?>
	<script language="javascript">

    location.href="display.php";
	</script>
    <?php
}
else
{
echo '<font color="red">Invalid Username/Password. <br /> Please try again later </font><br />'.$md5;
}
}
}
?>

<input name="submit" type="submit" value="Sign In"></td></tr>
</table>
</td><td width="96" bgcolor="#EAEAEA"><img width="1" height="1" src="./login_files/ecblank.gif" border="0" alt=""></td></tr>
</table>
</div><div align="center">
<table border="0" cellspacing="0" cellpadding="0">
<tr valign="top"><td width="622"><div align="center"><img src="./login_files/13.gif" width="523" height="38"></div></td></tr>
</table>
</div><BR>
</font><br>
</td></tr></table>
</form>
</body>
</html>

