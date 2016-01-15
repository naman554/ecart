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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b><i style="font-size: 30px;">NAMAN SONI</i></b></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
	<li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
<?php
$id = $_GET['id'];
?>
<?php
	$mob=mysql_query("select * from products where type = $id");
	while ($m=mysql_fetch_assoc($mob)){
		echo '<div class="col-sm-6 col-md-4">';
		echo '<a href="description.php?id='.$m["id"].'" style="text-decoration:none;">';
			echo '<div class="thumbnail">';
				echo '<img src="img/'.$m["image"].'"alt="Laptop" style="width:250px; height:250px;" >';
					echo '<div class="caption">';
						echo '<h3>'.$m["name"].'</h3>';
						
											
					echo '</div>';
			echo '</div></a>';
		echo '</div>';
		
	}
		
?>
</div>
</body>
</html>