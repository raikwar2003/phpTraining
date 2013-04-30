<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

</head>
<body>
<?php 
	include 'classes/users.php';
	$user = new users();
	$user_list = $user->showAll();
	//print_r($user_list);
	foreach ($user_list as $row)
	{
	echo "<pre>";
		echo $row['id']." - " ;
		echo $row['user_name']." - " ;
		echo $row['first_name']." - " ;
		echo $row['last_name'] ;
	echo "</pre>";
	}
?>
</body>
</html>