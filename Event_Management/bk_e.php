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
<ul class="nav navbar-nav"  style="font-family:algerian; font-size:20px;">
<li class=""><a href="cust_details.php">My Details</a></li>
<li class="active" ><a href="">Book an Event</a></li>
<li><a href="venuec.php"> View Venues</a></li>
<li><a href="feed.php"> Feedback</a></li>



</ul>

	  
<ul class="nav navbar-nav navbar-right"  style="font-family:algerian; font-size:20px;">

<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
  
<center><h1 style="font-family:algerian; color:black;">Book an Event</h1></center>
<center>
<table>
<form method="post">


<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Event Type </td>
<td><select name="event_type"><option>Select</option>
<option>Marriage</option>
<option>Engaement</option>
<option>Birthday</option>
<option>Farewell Fuction</option>
<option>Official Events</option>
<option>Official Events</option>
<option>College Events</option>
</select><br/><br/></br></td></tr>
<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Event Place </td><td>
<select name="event_place">
<option>select</option><option>Mumbai</option>
<option>Banglore</option>
<option>pune</option></tr>

</select><br/><br/></br></td>
<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">No of Guest </td></br><td> <input type="text" name="guest_no"/><br/></br><br/></td></tr>

<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Date </td><td> <input type="date" name="date"/><br/></br></br><br/></td>
</tr>
</table>
<td><input type="submit" name="submit" style="color:green;"></td>
</center>
</form>

</body>

<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$event_type=$_POST['event_type'] ;
					$event_place= $_POST['event_place'] ;					
					$guest_no=$_POST['guest_no'] ;
					$date=$_POST['date'] ;
					
												
		 mysql_query("INSERT INTO `book_event`(event_type,event_place,guest_no,date) 
		 VALUES ('$event_type','$event_place','$guest_no','$date')"); 
				
				
	        }
?>
