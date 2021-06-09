<?php
@$Name=$_POST['Name'];
@$Email=$_POST['Email'];
@$Age=$_POST['Age'];
@$Address=$_POST['Address'];
@$Blood_Group=$_POST['Blood_Group'];
@$PhoneNo=$_POST['PhoneNo'];
@$Paswrd=$_POST['Paswrd'];

if(!empty($Name)||!empty($Age)||!empty($Address)||!empty($Blood_Group)||!empty($PhoneNo)||!($Paswrd))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="dbmsproject";
	
	//create connection
	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbName);
	if(mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}
	else
	{
		$sql="INSERT Into userinfo (Name,Email,Age,Address,Blood_Group,PhoneNo) values('$Name','$Email','$Age','$Address','$Blood_Group','$PhoneNo')";
		$sql1="INSERT Into logininfo(UserName,Email,Paswrd) values ('$Name','$Email','$Paswrd')";
		if(($conn->query($sql))&&($conn->query($sql1)))
		{
			 header("Location: home.php");
		}
		else
		{
			echo "error:".$sql."<br>".$conn->error;
		}
		$conn->close();
        
        
	}
}
else
{
	echo "all fields are required";
	die();
}
?>