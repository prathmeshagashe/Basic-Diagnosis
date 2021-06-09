</html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body background="dna.jpg"><br><br><br><br><br><br><br><br><br><br>
		<center><button style="width: 500px; height: 100px;" value=><h1>YOU MAY HAVE THIS DISEASE</h1></button></center>
		
<?php

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="dbmsproject";
 $UserN=$_POST['one'];
 $UserNa=$_POST['two'];
 $UserNam=$_POST['three'];


// Create connection
$conn = mysqli_connect("localhost", "root", "","dbmsproject");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$res ="CALL proc('$UserN','$UserNa','$UserNam')";


if($result = mysqli_query($conn,$res)){
while($row=mysqli_fetch_row($result))
{
echo "<center><button style='width: 500px; height: 100px;' value=><h1	>";
        echo $row[0] ;
		echo "</h1></button></center>";
	break;
}
}
	
$conn->close();		
		
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
	

<div style="float: right;">
<center>
<button style="width: 300px; height: 60px;"><h4>TO CHECK YOUR BMI SCORE</h4></button>
<form id="bmi" action="bmi.php" method="post">
<button type="submit" style="width: 300px; height: 60px;"><h4>CLICK HERE</h4></button>
</center>
</div>
	</body>
  </html>  
  

 