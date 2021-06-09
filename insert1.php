<?php
@$Name=$_POST['UserName'];
@$Email=$_POST['Email'];
@$Pass=$_POST['Paswrd'];

$error=''; //Variable to Store error message;

 if(empty($Name)||empty($Email)||empty($Pass)){
 $error = "Username or Password is Invalid";
 }
 else
 {

 $conn = mysqli_connect("localhost", "root", "","dbmsproject");
 //Selecting Database
 $db = mysqli_select_db($conn, "dbmsproject");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM logininfo WHERE Paswrd='$Pass' AND UserName='$Name' AND Email='$Email'");
 
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

 
?>