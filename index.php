<?php
include("include/conn.php")
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bs/js/bootstrap.min.js"></script>
</head>
<body class="arpit">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b><i style="font-size: 30px;">E-cart</i></b></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
	<li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
	
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="naman"  src="img/aa.jpg" alt="Chania">
    </div> 

    <div class="item">
      <img class="naman" src="img/a.jpg" alt="Chania">
    </div>

    <div class="item">
      <img class="naman"  src="img/b.jpg" alt="Flower">
    </div>

    <div class="item">
      <img class="naman"  src="img/aa.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row">
<?php
$res = mysql_query("Select * from categories;");
while ($re=mysql_fetch_assoc($res)) {
  echo '<div class="col-sm-6 col-md-4">';
	echo '<a href="'.$re["page"].'">';
    echo '<div class="thumbnail">';
      echo '<img src="img/'.$re["img"].'"  width="250px" height="250px" >';
      echo '<div class="caption">';
        echo '<h3>'.$re["name"].'</h3>';
        
      echo '</div>';
	echo '</div></a>';
  echo '</div>';
  
}

?>
</div>
<div class="TP">

   <h2 style="color:blue"><u>Top Product</u></h2>
</div>
<div class="img">
	<img src="img/b.jpg" width="500px" height="40%">
</div>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
    <li><a data-toggle="tab" href="#menu1">Specs.</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Specification</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
<div class="btn">
	<button type="button" class="btn btn-success">Buy</button>
	<button type="button" class="btn btn-warning">Add to cart</button>
</div>
</body>
</html>
