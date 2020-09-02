<?php
  include("db.php");  

	$cust_id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM customer_details WHERE cust_id = '$cust_id'")
	or die(mysql_error());  	
	
	header("Location: cust_view.php");
?>
