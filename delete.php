<?php
	$con = mysqli_connect('localhost','root','','phptraining');
	
	mysqli_query($con,"DELETE FROM users WHERE id='$_GET[id]'");
	
	header("Location: index.php");
	
	mysqli_close($con);
?>