<?php
@$AdminName=$_POST['AdminName'];
@$AdminPassword=$_POST['AdminPassword'];

$error=''; //Variable to Store error message;

 if(empty($AdminName)||empty($AdminPassword)){
 $error = "name or Password is Invalid";
 }
 else
 {

 $conn = mysqli_connect("localhost", "root", "","dbmsproject");
 //Selecting Database
 $db = mysqli_select_db($conn, "dbmsproject");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE AdminName='$AdminName' AND AdminPassword='$AdminPassword'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: home.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 echo "invalid email or password";
 }
 mysqli_close($conn); // Closing connection
 }
header("Location: admin1.php");
 
?>