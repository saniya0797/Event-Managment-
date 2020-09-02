<!--09/11/2018 created  by Nishat Balekundri -->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<style>
body{
	background-color:lightblue;
	font-family:algerian;
}
h1{
	padding-top:5%;
	font-family:cursive;
	font-size:30px;
}
td{
	font-family:cursive;
	font-size:20px;
	
}
th{
	color:khaki;
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
<li><a href="add_vn.php">Add Venue</a></li>
<li><a href="bk_view.php">View Bookings</a></li>
<li><a href="venue.php">View Venues</a></li>
<li class="active"><a href="viewf.php">View Feedback</a></li>

</ul>

	  
<ul class="nav navbar-nav navbar-right" style="font-family:algerian; font-size:20px;">

<li><a href="front.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
<center>
<h1 style="color:orange font-family:algerian;">FEEDBACK</h1>
<table border="1 px solid white" style="width:50%; height:40%;">


<th style="text-align:center;">Id</th>
<th style="text-align:center;">Feedback</th>


</body>

<?php

include("db.php");
			
				
	$result=mysql_query("SELECT * FROM feedback");
			
while($test = mysql_fetch_array($result))		
			

			{
$id = $test['id'];	
echo "<tr align='center'>";	
echo"<td><font color='white'>" .$test['id']."</font></td>";
echo"<td><font color='white'>" .$test['feed']."</font></td>";

			
echo "</tr>";
}
mysql_close($conn);
?>
</table>
</center>


         


                 

        
