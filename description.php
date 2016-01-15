
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

<?php
$id = $_GET['id'];
?>
<div class="row">
<?php
	$mob=mysql_query("select * from products where id = $id");
	while ($m=mysql_fetch_assoc($mob)){
		 echo '<div class="col-sm-6 col-md-6">';
			echo '<div class="thumbnail">';
				echo '<img src="img/'.$m["image"].'"alt="Laptop" style="width:250px; height:250px;" >';
					echo '<div class="caption">';
						echo '<h3><center>'.$m["name"].'</center></h3>';
						
						
					echo '</div>';
					echo '</div>';
					echo '</div>';
					
	}
?>
<div class="col-sm-6 col-md-6">
	
	<?php
		$pro=mysql_query("select * from products where id = $id");
		while($p=mysql_fetch_assoc($pro)){
			echo '<h2>'.$p["name"].'</h2>';
			echo '<h3>Rs.'.$p["price"].'</h3>';
			
			
			echo '<br><br>';
	
				echo '<div class="btns">';
					echo '<a href="login.php"><button type="button" class="btn btn-success">Buy</button></a><br><br>';
					echo '<a href="link.php?id='.$p["id"].'"><button type="button" class="btn btn-warning">Add cart</button></a>';
			echo '</div>';
		}
	?>
</div>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
    <li><a data-toggle="tab" href="#menu1">Specs.</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Description</h3>
      <p><?php
			$des=mysql_query("select * from products where id = $id");
			while ($d=mysql_fetch_assoc($des)){
				echo '<li><h5>'.$d["description"].'</h5></li>';
			
			}
	  ?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Specifications</h3>
      <p><?php
			$des=mysql_query("select * from products where id = $id");
			while ($d=mysql_fetch_assoc($des)){
				echo '<li><h5>'.$d["specifications"].'</h5></li>';
			
			}
	  ?></p>
    </div>
  </div>
  

</body>
</html>