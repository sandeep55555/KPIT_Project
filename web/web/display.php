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
  <br>
<table class="style2" width="80%" align="center" border="1" cellpadding="3" cellspacing="0">
  <tbody>
  <tr>
<td align="center" colspan="7" bgcolor="#6699FF"><font size="6" color="#663366">Alumni Data</font><br>
 </td>
</tr>
  <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="center" bgcolor="#ffffff"><b>First Name </b></td>
    <td class="style1" align="center" bgcolor="#ffffff"><b>Last Name</b></td>
    <td class="style1" align="center" bgcolor="#ffffff"><b>Phone No.</b></td>
  </tr>

<?php

    $con=mysql_connect("localhost","root","");

    mysql_select_db("phonebook",$con);
    $row=mysql_query("SELECT * FROM phoneinfo");
    while($array =mysql_fetch_array($row))
    {
?>

  <tr class="style1" bgcolor="#ffffcc">
    <td class="style1" align="center" bgcolor="#ffffff"><?php echo $array['First_name']; ?></td>
    <td class="style1" align="center" bgcolor="#ffffff"><?php echo $array['Last_name']; ?></td>
    <td class="style1" align="center" bgcolor="#ffffff"><?php echo $array['Phone_no']; ?></td>

  </tr>
  <?php
  }
  ?>

</tbody></table>
</form>
</div>
</body></html>