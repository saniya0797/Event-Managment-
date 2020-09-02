<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
body{
background-color:lightblue;	
font-family:brittanic bold;
}


}
table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th{
	background-color:lightgreen;

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


<a class="navbar-brand" href="#"></a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav" style="font-family:algerian; font-size:20px;">
<li ><a href="add_vn.php">Add Venue</a></li>
<li class="active"><a href="bk_view.php">View Bookings</a></li>
<li><a href="venue.php">View Venues</a></li>
<li><a href="viewf.php">View Feedback</a></li>

</ul>


	  
<ul class="nav navbar-nav navbar-right" style="font-family:algerian; font-size:20px;">
<li><a href="#"><span class="glyphicon glyphicon-"></span> </a></li>
<li><a href="front.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>


<center>



<table border="1" style="width:90%; height:40%;" >

	
<center style="color:khaki";><h1>BOOKING DETAILS</h1></center></br></br>
<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form><br/><br/>
<th style="font-family:algerian; color:salmon;font-size:20px;">id</th>
<th style="font-family:algerian; color:salmon;font-size:20px;">Event Type</th>
<th style="font-family:algerian; color:salmon;font-size:20px; ">Event Place</th>
<th style="font-family:algerian; color:salmon;font-size:20px; ">No of Guest</th>
<th style="font-family:algerian; color:salmon; font-size:20px;">Date</th>


</center>




<?php
$search_value=$_POST["search"];
include 'db.php';

$result=mysql_query("select * from book_event where event_type like '%$search_value%'");
			
			while($test = mysql_fetch_array($result))
			{
        

       $id = $test['booking_id'];	
echo "<tr align='center'>";

echo"<td><font color='white'>" .$test['booking_id']."</font></td>";
echo"<td><font color='white'>" .$test['event_type']."</font></td>";
echo"<td><font color='white'>". $test['event_place']. "</font></td>";
echo"<td><font color='white'>". $test['guest_no']. "</font></td>";
echo"<td><font color='white'>" .$test['date']."</font></td>";
	

echo"</td>";
		
echo "</tr>";


            }       

        
?>


</table>
