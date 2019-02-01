<?php
include './master.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Alumni Portal</title>

<script language="javascript">

function submitForm(){
	if(document.add.fname.value==''){
		alert('Please enter the first name.');
		document.add.fname.focus();
		return false;
	}
	
	if(document.add.lname.value==''){
		alert('Please enter the last name.');
		document.add.lname.focus();
		return false;
	}

    if(document.add.mobile.value==''){
		alert('Please Enter Mobile Number.');
		document.add.mobile.focus();
		return false;
	}
    var numericExpression = /^[0-9]+$/;
	if(document.add.mobile.value.match(numericExpression)){
	  return true;
	}else{
           alert('Please Enter Number only.');
		document.add.mobile.focus();
		return false;
	}
    if(document.add.pass.value==''){
		alert('Please Enter Password.');
		document.add.pass.focus();
		return false;
	}
	
<?php
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
	$pwd=$_POST['pass'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("phonebook", $con);
$pass = md5($pwd);
mysql_query("INSERT INTO phoneauthuser VALUES(".$mobile.",'".$pass."')");
mysql_query("INSERT INTO phoneinfo VALUES('".$fname."','".$lname."',".$mobile.")");

mysql_close();

     ?>

	return true;
}
</script>

</head>
<body><div align="center">
<form name="add" method="post" action="" enctype="multipart/form-data">

<table class="style2" width="557" align="center" border="0" cellpadding="3" cellspacing="0">
  <tbody>

  <tr>
<td align="center" colspan="2" width="178"><b class="headertext">Alumni Registration Form<br> </td>
</tr>
  <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="left" bgcolor="#ffffff">First Name* </td>
    <td width="358" align="left" bgcolor="#ffffff"><input name="fname" id="fname" size="30" type="text"></td>
  </tr>
    <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="left" bgcolor="#ffffff">Last Name* </td>
    <td align="left" bgcolor="#ffffff"><input name="lname" id="lname" size="30" type="text"></td>
  </tr>
   <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="left" bgcolor="#ffffff">Mobile* </td>
    <td align="left" bgcolor="#ffffff"><input name="mobile" id="mobile" size="10" type="text" maxlength="10"></td>
  </tr>
   <tr class="style1" bgcolor="#ffffcc">
     <td class="style1" align="left" bgcolor="#ffffff">Password*</td>
     <td align="left" bgcolor="#ffffff"><input name="pass" id="pass" size="30" type="password" /></td>
   </tr>
  <tr>
    <td colspan="2"><div align="center"><br>
    <?php
    if($_POST['$fname'] !=")
    {
      echo '<font color="blue">!! Successfully Inserted Data !!</font><br>';
     }
    ?>
      <input name="submit" value="Submit" onclick="javascript:return submitForm();" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Clear">
    </div></td>
  </tr>
</tbody></table>
</form>
</div>
</body></html>