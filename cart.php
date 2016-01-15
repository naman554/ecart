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
	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
      </ul>
    </div>
  </div>
</nav>




<?php
	$e=mysql_query("select * from cart");
		while($f=mysql_fetch_assoc($e)){
			echo '<div class="panel panel-default">';
				echo '<div class="panel-body">';
					echo '<img src="img/'.$f["image"].'" style="width:100px;height:100px;">';	
						echo $f["name"];
							echo 'price:'.$f["price"].'';
							echo '<a href="delete.php?id='.$f["id"].'" style="float:right;"><button type="button" class="btn btn-info">Remove</button></a>';
					echo '</div>';
				echo '</div>';
				
		}
?>
   
 

</body>
</html>