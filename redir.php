
<?php
include('include/conn.php');

	session_start();
?>
<?php
	
	$l=mysql_query("select * from users where username = '$_POST[username]' and password = '$_POST[pwd]'");
	$res=mysql_fetch_array($l);
	$rows=mysql_num_rows($l);
	if($rows > 0)
	{
		$_SESSION["username"]=$res["username"];
		$_SESSION["password"]=$res["password"];
		$_SESSION["id"]=$res["id"];
		header('Location: profile.php');
	}
	else{
		
		
		header('Location:login.php');	
	}
		
?>