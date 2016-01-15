<?php
include('include/conn.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
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
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
	
      </ul>
    </div>
  </div>
</nav>

<div class="login" style="padding-left:500px; margin-top:100px;">
	<h4>Login</h4>
	<form action="redir.php" method="POST"><br>
		Username:<br><input type="text" name="username"><br><br>
		Password:<br><input type="password" name="pwd"><br><br>
		<input type="submit" name="submit"/>
	</form>
</div>

</body>
</html>