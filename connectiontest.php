<?php
//Create Connection
$con=mysqli_connect("localhost","root","","phptraining");

//Check connection
if(mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: ". mysqli_connect_error();
	}
else {
		echo "Connected Successfully";
	}
	
	


	
?>