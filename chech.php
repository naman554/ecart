
<?php
include('include/conn.php');
session_start();
?>
<html>
<body>
<?php
	echo $_SESSION["username"];
	echo $_SESSION["password"];
?>
</body>
</html>