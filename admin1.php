
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title> admin </title>
  
</head>
<?php
include 'style.php';
?>
  <body>
	
<?php

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="dbmsproject";


// Create connection
$conn = mysqli_connect("localhost", "root", "","dbmsproject");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<table id="usertable">
		<tr>
		<th> UserID </th>
		<th> Email </th>
		<th> Name </th>
		<th> Age </th>
		<th> Address </th>
		<th> Blood Group </th>
		<th> Phone No </th>
		<th> Want to Delete? </th>
		</tr>
		
<?php

$sql="SELECT * FROM `userinfo`";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$userid=$row["UserID"];
		$email=$row["Email"];
		$name=$row["Name"];
		$age=$row["Age"];
		$address=$row["Address"];
		$bloodgroup=$row["Blood_Group"];
		$phoneno=$row["PhoneNo"];
?>

		<tr>
		<td> <?php echo $userid ?> </td>
		<td> <?php echo $email ?> </td>
		<td> <?php echo $name ?> </td>
		<td> <?php echo $age ?> </td>
		<td> <?php echo $address ?> </td>
		<td> <?php echo $bloodgroup ?> </td>
		<td> <?php echo $phoneno ?> </td>
		<td> <form action="delete_user.php" method="post"> <input type="hidden" name="email" value="<?= $email ?>"> <button type="submit" name="submit" value="delete" class="btn btn-primary">Delete</button> </form> </td>
		</tr>
<?php 
	}
}

?>
</table>
</body>