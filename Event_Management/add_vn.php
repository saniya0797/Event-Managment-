<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style>
h1{

	font-family:algerian;
}

body{
	background-color:lightblue;
background-repeat:no repeat;
background-size:100%;
}
center{
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
<li class="active"><a href="add_vn.php">Add Venue</a></li>
<li><a href="bk_view.php">View Bookings</a></li>
<li><a href="venue.php">View Venues</a></li>
<li><a href="viewf.php">View Feedback</a></li>

</ul>

	  
<ul class="nav navbar-nav navbar-right"  style="font-family:algerian; font-size:20px;">

<li><a href=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
  
  
<center>
<h1  style="font-family:algerian; color:black;">VENUE DETAILS</h1></center></br>

<table style="font-family:cursive; font-size:30px; margin-left:25%;" >
<form method="post">
<tr>
<td style="font-size:30px; color:khaki";>Venue Name <td><input type="text" name="v_name" style="height:30px";/><br/><br/></td></td>
<tr>
<td style=" font-size:30px; color:khaki;">Venue Address <td><input type="text" name="v_address" style="height:30px";/><br/><br/></td></td>
<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Capacity <td> <input type="text" name="capacity" style="height:30px";/><br/><br/></td></td>

<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Cost </td><td> <input type="text" name="cost" style="height:30px";/><br/><br/></td>


<tr>
<td ><input type="submit" name="submit" style="color:green;"/></td>
</form>
</table>
</body>

<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$v_name=$_POST['v_name'] ;
					$v_address= $_POST['v_address'] ;
					$capacity=$_POST['capacity'] ;					
					$preferred_for=$_POST['preferred_for'] ;
					$cost=$_POST['cost'] ;
					$image=$_POST['image'] ;
					
												
		 mysql_query("INSERT INTO `add_venue`(v_name,v_address,capacity,preferred_for,cost,image) 
		 VALUES ('$v_name','$v_address','$capacity','$preferred_for','$cost','$image')"); 
				
				
	        }
?>
