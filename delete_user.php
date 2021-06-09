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

$email=$_POST['email'];
$sql="DELETE FROM `userinfo` WHERE Email='$email'";
$run=mysqli_query($conn, $sql);
if($run)
{
	echo 
	"User Deleted";
}
else
	echo "<script> alert('something went wrong'); </script>";

header("Location: admin1.php");

?>