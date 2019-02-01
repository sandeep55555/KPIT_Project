<?php
include './master.php';


?>
<html>
<head>
</head>

<body>
<br><br><br><br><br><br><br><br><br><br>
<h1>
<font color="lightblue">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You have successfully logged off.
</font>
</h1>

<?php
              if(isset($_SESSION['userid'])){
               unset($_SESSION['userid']);
		session_destroy();
		}

?>
	<script language="javascript">
	alert("You have successfully logged off.");
	location.href="./login.php";
	</script>
</body>
</html>
