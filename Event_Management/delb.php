<?php
  include("db.php");  

	$booking_id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM book_event WHERE booking_id = '$booking_id'")
	or die(mysql_error());  	
	
	header("Location: bk_view.php");
?>
