<?php
require("db.php");
$cust_id =$_REQUEST['cust_id'];//requesting url to send id

$result = mysql_query("SELECT * FROM customer_details WHERE cust_id  = '$cust_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
				$name=$test['name'] ;
				$address= $test['address'] ;					
				$mobile_no=$test['mobile_no'] ;
				$email=$test['email'];
				$password=$test['password'];
if(isset($_POST['save']))
{
                  
					$name_save=$_POST['name'] ;
				$address_save=$_POST['address'] ;					
				$mobile_no_save=$_POST['mobile_no'] ;
				$email_save=$_POST['email'];
				$password_save=$_POST['password'];

	mysql_query("update custumer_details SET  name_save ='$name', address_save='$address',
		 mobile_no_save ='$mobile_no' ,email_save='$email', password_save='$password' WHERE cust_id = '$cust_id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: cust_view.php");			
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
		<td>name</td>
		<td><input type="text" name="name" value="<?php echo $name ?>"/></td>
	</tr>
	<tr>
		<td>address</td>
		<td><input type="text" name="address" value="<?php echo $address ?>"/></td>
	</tr>
	<tr>
		<td>mobile_no</td>
		<td><input type="text" name="mobile_no" value="<?php echo $mobile_no ?>"/></td>
	</tr>
	<tr>
		<td>email</td>
		<td><input type="text" name="email" value="<?php echo $email ?>"/></td>
	</tr>
	<tr>
		<td>password</td>
		<td><input type="text" name="password" value="<?php echo $password ?>"/></td>
	</tr>
	
	
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
