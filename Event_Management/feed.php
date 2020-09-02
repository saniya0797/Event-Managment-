<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style>

body{
background-color:lightblue;
	

}
h1{
	padding-top:5%;
	font-family:cursive;
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
<li><a href="front.php">My Details</a></li>
<li ><a href="bk_e.php">Book an Event</a></li>


<li><a href="venuec.php"> View Venues</a></li>
<li class="active"><a href="feed.php">Feedback</a></li>


</ul>

	  
<ul class="nav navbar-nav navbar-right" style="font-family:algerian; font-size:20px;">

<li><a href="front.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
<center>
<h1 style="font-family:algerian;color:orange;">FEEDBACK</h1>
<table>
<form method="post">
<tr>
<td></td><td><input type="text" name="feed" style="height:200px;width:500px;color:black;"/><br/><br/></td>
</tr>
</table>
<button type="submit" class="btn btn-info" name ="submit">submit</button>
</form>
</center></body>

<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$feed=$_POST['feed'] ;
					
					
												
		 mysql_query("INSERT INTO `feedback`(feed) 
		 VALUES ('$feed')"); 
				
				
	        }
?>

