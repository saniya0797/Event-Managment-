<?php
require("db.php");
$booking_id =$_REQUEST['id'];//requesting url to send id

$result = mysql_query("SELECT * FROM book_event WHERE booking_id  = '$booking_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$event_type=$test['event_type'] ;
				$event_place= $test['event_place'] ;
                				$guest_no= $test['guest_no'] ;									
				$date=$test['date'] ;
				
if(isset($_POST['save']))
{	
	$event_type = $_POST['event_type'];
	$event_place = $_POST['evnt-place'];
	$guest_no = $_POST['guest-no'];
	$date=$_POST['date'];


	mysql_query("UPDATE book_event SET event_type ='$event_type', event_place ='$event_place',
		 guest_no ='$guest_no', date ='$date'  WHERE booking_id = '$booking_id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: bk_view.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<title>phptaab.blogspot.in</title>
</head>

<body>
<form method="post">
<table>
	<tr>
		<td>event_type</td>
		<td><input type="text" name="event_type" value="<?php echo $event_type ?>"/></td>
	</tr>
	<tr>
		<td>event_place</td>
		<td><input type="text" name="event_place" value="<?php echo $event_place ?>"/></td>
	</tr>
	<tr>
		<td>guest_no</td>
		<td><input type="text" name="guest_no" value="<?php echo $guest_no ?>"/></td>
	</tr>
	<tr>
		<td>date</td>
		<td><input type="date" name="date" value="<?php echo $date ?>"/></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
