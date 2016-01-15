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
		$cart=mysql_query("select * from products where id = $id");
		$c=mysql_fetch_array($cart);
		$d=mysql_query("INSERT INTO `cart`(`id`, `name`, `image`, `specificcaations`, `description`, `price`, `company`) VALUES ($c[id],'$c[name]','$c[image]','$c[specifications]','$c[description]',$c[price],'$c[company]')");
		header('Location:cart.php');
?>



</body>
</html>