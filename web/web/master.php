<?php
session_start();
if(isset($_SESSION['userid']))
{

}
        else
        {
    ?>
                <script language="javascript">
            	//location.href="./login.php";
                </script>
    <?php


        }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Alumni Portal</title>

</head>

<body>
<img src="./login_files/portal1.bmp" width="100%">
   <table align="left" height="20%" width="14%" border="0" cellspacing="0" cellpadding="6">
     <tr>
       <td></td>
	<td rowspan="30" ><IMG SRC="./login_files/inve.gif" ALIGN="RIGHT" HEIGHT="500" WIDTH="2"></td>

     </tr>
     <tr>
       <td ><a href="./display.php">Display Data</a></td>
     </tr>
     <tr>
       <td><a href="./add.php">Add Data</a></td>
     </tr>
     <tr>
       <td><a href="./change.php">Change Password</a></td>
     </tr>
     <tr>
       <td><a href="./log_out.php">Log Out</a></td>
     </tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>         
   </table>

</body>

</html>

