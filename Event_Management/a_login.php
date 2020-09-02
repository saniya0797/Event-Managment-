<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Untitled Document</title>

<style>
  
input[type=text] {
    width: 100%;
    padding: 5px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
	font-size: 20px;
    
    color: black;
	font-family:arial;
	}
body{
background-repeat:no repeat;
background-size:100% 100%;
background-color:lightblue;

}
center{
	padding-top:8%;
padding-bottom:20%;
padding-left:35%;
padding-right:28%;
}

</style>
</head>
 <body>
 <nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
	  
	  
	  


</div>
	
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav" style="font-family:algerian; font-size:20px;">
<li class=""><a href="front.php">Home</a></li>
<li><a href="contact.php">contact us</a></li>
<li><a href="abt.php">about us</a></li>
<li><a href="gallery.php">gallery</a></li>
</ul>
<ul class="nav navbar-nav navbar-right" style="font-size:20px;font-family:algerian;">
<li><a href="#"><span class="glyphicon glyphicon-"></span></a></li>
<li><a href="front.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>

</div>
</div>
</nav>
 
 <form name="" method="POST">
<center>

<h2 style="font-family:algerian; color:black;">LOGIN FORM</h2></br>
<div class="demo" style="font-family:cursive; font-size:25px; color:khaki;">
NAME</br><input type="text" name="name" size="20" width="30px" /><br></br>
PASSWORD </br><input type="password" name="password" size="30" width="30px" /></br></br>
</div>


<button type="submit" class="btn btn-info btn-block btn-lg" name="submit" />LOGIN</button>
<h2 style="padding-left:50%; color:khaki; font-size:20px;">ForgotPassword</h2>
<a href="add_v.php"><button type="button" class="btn btn-info btn-block btn-lg" />SIGNUP</button></a>
</center>
</form>

<?php
if (isset($_POST['submit']))
	{	  
include("db.php");

session_start();

$name=$_POST['name'];
$password=$_POST['password'];

$_SESSION['login_user']=$name;
 
$query = mysql_query("SELECT name FROM admin_login WHERE name='$name' and password='$password'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='add_vn.php' </script>";	
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
    
?>
						
					
      
</body>
</html>
