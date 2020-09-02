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
<li><a href="venuec.php">View Venue</a></li>
<li><a href="feed.php">Feedback</a></li>
</ul>

	  
<ul class="nav navbar-nav navbar-right" style="font-family:algerian; font-size:20px;">
<li><a href="#"><span class="glyphicon glyphicon-"></span> </a></li>
<li><a href="front.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</div>
</div>
</nav>
<body>
<center><h1 style="font-family:algerian; color:orange; padding-top:5%;">CUSTOMER DETAILS</h1></center></br></br></br>
<center>
<table  >
<form method="post">
<tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Name<td> <input type="text" name="name" style="height:30px";/><br/></td></td>
</tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Address<td><input type="text" name="address" style="height:30px";/><br/></td></td>
</tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Mobile No<td><input type="text" name="mobile_no" style="height:30px";/><br/></td></td>
</tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Email <td> <input type="text" name="email" style="height:30px";/><br/></td></td>
</tr>
<td style="font-family:cursive; font-size:30px; color:khaki;">Password <td> <input type="text" name="password" style="height:30px;"/><br/></td></td>
</tr>
<form>
</table></br></br></br>
<button type="submit" class="btn btn-info " name="submit" />Submit</button>
</center>
</body>

<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$name=$_POST['name'] ;
					$address= $_POST['address'] ;					
					$mobile_no=$_POST['mobile_no'] ;
					$email=$_POST['email'] ;
					$password=$_POST['password'] ;

					
												
		 mysql_query("INSERT INTO `customer_details`(name,address,mobile_no,email,password) 
		 VALUES ('$name','$address','$mobile_no','$email','$password')"); 
				
				
	        }
?>
