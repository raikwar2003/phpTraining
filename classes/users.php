<?php 
	class users
	{
		private $conn_db;
		
		function __construct()
		{
			$this->conn_db = mysqli_connect("localhost","root","","phptraining");
			if (mysqli_connect_errno($this->conn_db))
			{
				echo "Failed to connect; ".mysqli_connect_error();
				return false;
			}
		}
		
		function create()
		{
			$sql = mysqli_query("INSERT INTO users(user_name, first_name, last_name, email) VALUES ('$_POST[user_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]')");
			if(!mysqli_query($this->conn_db,$sql))
			{
				die('Error: '.mysqli_error($con));
			}
			return true;
		}
		
		function read()
		{
			$result = mysqli_query($this->conn_db, "SELECT * from users");
			$user_list = mysqli_fetch_all($result,MYSQLI_ASSOC);
			return $user_list;
		}
		
		
	}
?> 