<?php
include './master.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Alumni Portal</title>

</head>
<body><div align="center">
<form name="add" method="post" action="" enctype="multipart/form-data">
<table class="style2" width="557" align="center" border="0" cellpadding="3" cellspacing="0">
  <tbody>
  <tr>
<td align="center" colspan="2"><b class="headertext">Change Password<br>
 </td>
</tr>
  <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="left" bgcolor="#ffffff">Username </td>
    <td align="left" bgcolor="#ffffff"><input name="username" value="<? echo $_SESSION['userid'];?>" size="30" type="text" disabled  ></td>
  </tr>
    <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="left" bgcolor="#ffffff">Password* </td>
    <td align="left" bgcolor="#ffffff"><input name="password" id="password" size="30" type="password"></td>
  </tr>
    <tr>
    <td colspan="2"><div align="center"> <br>

<?php
if(isset($_POST['submit']))
{
if ($_POST['password']=='')
{
echo '<font color="red">Please Enter the Password </font><br>';
}

else
{
  $password=$_POST['password'];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Phonebook", $con);
$pwd = md5($password);
mysql_query("UPDATE phoneauthuser set Password='".$pwd."' where Phone_no=". $_SESSION['userid']."");

mysql_close();
echo '<font color="blue">!! Succesfully changed password !!</font><br>';

}
}
?>


      <input name="submit" type="submit" value="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Clear">
    </div></td>
  </tr>
</tbody></table>
</form>
</div>
</body>
</html>