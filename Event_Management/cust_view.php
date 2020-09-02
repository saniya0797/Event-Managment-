<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
body{
font-family:brittanic bold;
font-size:25px;
background-color:lightblue;




}
table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th{
	background-color:lightgreen;


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
<li class="active"><a href="">My Details</a></li>
<li ><a href="bk_e.php">Book an event</a></li>
<li><a href="cus_view">Booking History</a></li>
<li><a href="venue.php">View Venue</a></li>
<li><a href="feed.php">Feedback</a></li>

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

	
<center style="color:white";><h1>CUSTOMER DETAILS</h1></center></br></br>
<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form><br/><br/>
<th style="font-family:algerian; color:salmon;font-size:20px;">customer id</th>
<th style="font-family:algerian; color:salmon; font-size:20px;">name</th>
<th style="font-family:algerian; color:salmon;font-size:20px; ">address</th>
<th style="font-family:algerian; color:salmon;font-size:20px; ">mobile no</th>
<th style="font-family:algerian; color:salmon; font-size:20px;">email</th>
<th style="font-family:algerian; color:salmon;font-size:20px;;">password</th>

</center>




<?php
$search_value=$_POST["search"];
include 'db.php';

$result=mysql_query("select * from customer_details where cust_id like '%$search_value%'");
			
			while($test = mysql_fetch_array($result))
			{
        

       $id = $test['cust_id'];	
echo "<tr align='center'>";

echo"<td><font color='darkred'>" .$test['cust_id']."</font></td>";
echo"<td><font color='darkred'>" .$test['name']."</font></td>";
echo"<td><font color='darkred'>". $test['address']. "</font></td>";
echo"<td><font color='darkred'>". $test['mobile_no']. "</font></td>";
echo"<td><font color='darkred'>" .$test['email']."</font></td>";
echo"<td><font color='darkred'>" .$test['password']."</font></td>";	

		
echo "</tr>";


            }       

        
?>


</table>
