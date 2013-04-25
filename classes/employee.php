<?php
class Employee
	{
		function addEmployee($username, $fname, $lname, $email)
		{
			echo "Added employee successfully";
			$con=mysqli_connect("localhost","root","","phptraining");
			
			//Check connection
			if(mysqli_connect_errno($con))
			{
				echo "Failed to connect to MySQL: ". mysqli_connect_error();
				return false;
			}
			
			$sql="INSERT INTO users (user_name, first_name, last_name, email)
			VALUES	('$_POST[user_name]','$_POST[first_name]','$_POST[last_name]','$email')";
			
			if(!mysqli_query($con,$sql)){
				
				die('Error: '.mysqli_error($con));
			}
			
			mysqli_close($con);			
			header("Location: success.php");
			return true;
		}
	}

?>