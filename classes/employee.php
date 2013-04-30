<?php
class Employee
	{
		//***** Function for Add new employee ****
		function addEmployee()
		{
			//echo "Added employee successfully";
			$con=mysqli_connect("localhost","root","","phptraining");
			
			//Check connection
			if(mysqli_connect_errno($con))
			{
				echo "Failed to connect to MySQL: ". mysqli_connect_error();
				return false;
			}
			
			$sql="INSERT INTO users (user_name, first_name, last_name, email)
			VALUES	('$_POST[user_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]')";
			
			if(!mysqli_query($con,$sql)){
				
				die('Error: '.mysqli_error($con));
			}
			
			mysqli_close($con);			
			header("Location: success.php");
			return true;
		}
		
		//***** Function for Edit Button ****
		function editEmployee()
		{
			$con=mysqli_connect("localhost","root","","phptraining");
			
			$result = mysqli_query($con,"SELECT * FROM users where id='$_GET[id]'");
			
			$row = mysqli_fetch_array($result);
			
			mysqli_close($con);
			return $row;
		}
		
		//**** Function for Update Button ****
		function update()
		{
			$con=mysqli_connect("localhost","root","","phptraining");
			
			mysqli_query($con,"UPDATE users SET user_name='$_POST[user_name]', first_name='$_POST[first_name]', last_name='$_POST[last_name]', email='$_POST[email]' where id='$_REQUEST[id]'");
				header("Location: success.php");
			
		}
		
		//**** Function for Delete Button ****
		function delete()
		{
			$con=mysqli_connect("localhost","root","","phptraining");
			
			mysqli_query($con,"DELETE FROM users WHERE id='$_GET[id]'");
			header("Location: index.php");
			
		}
		
	}


?>