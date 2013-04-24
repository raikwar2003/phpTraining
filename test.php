<?php
$a = 10;
echo $a;

			$con=mysqli_connect("localhost","root","","phptraining");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			
			$result = mysqli_query($con,"SELECT * FROM users where id='$_GET[id]'");
			
			$row = mysqli_fetch_array($result);
			
			if(isset($_POST['update']))
			{	
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			echo "done";
				//$update="UPDATE users SET user_name='$_POST[user_name]', first_name='$_POST[first_name]', last_name='$_POST[last_name]', email='$_POST[email]' where id='$_REQUEST[id]'";
//				mysqli_query($con,"UPDATE users SET user_name='$_POST[user_name]', first_name='$_POST['first_name']', last_name='$_POST[last_name]', email='$_POST[email]' where id='$_REQUEST['id']'");
			}
		
?>

echo "After Warning";
<?php 
	include iincludes/header.php'; 
?>


