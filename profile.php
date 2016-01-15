
<?php
include('include/conn.php');
session_start();
?>
<?php require_once "richtexteditorphp/richtexteditor/include_rte.php" ?>


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


	<?php
		if(isset($_POST["submit"])){
			$up=mysql_query("UPDATE `users` SET `mobile`='$_POST[mobile]',`address`='$_POST[Editor1]' WHERE id= $_SESSION[id]");
		}

	?>
	
            <?php 
				$user=mysql_query("select * from users where id=$_SESSION[id]");
				
				$u=mysql_fetch_assoc($user);
					
				?>
			<div class="reg">
	</div>
	
	<form id="form1" method="POST" action="profile.php" style="padding-left:10px;"> 
			Mobile:<br><input type="tel" value=<?php echo $u["mobile"]; ?> name="mobile"><br></br>
	<?php
                // Create Editor instance and use Text property to load content into the RTE.  
                $rte=new RichTextEditor();   
                $rte->Text=$u["address"]; 
                // Set a unique ID to Editor   
                $rte->ID="Editor1";    
                $rte->MvcInit();   
                // Render Editor 
                echo $rte->GetString(); 
				
              ?>
			 <br> <input type="submit"  name="submit">
        </form> 

</body>
</html>