<?php
include("include/conn.php");
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body class="arpit">
<?php
$id=$_GET['id'];
?>
<?php
	$del=mysql_query("delete from cart where id = $id");
	header("Location:cart.php");
?>

</body>
</html>