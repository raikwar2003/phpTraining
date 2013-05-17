<?php
	$car0="Volvo";
	$car1="BMW";
	$car2="Toyota";
	$cars=array($car0,$car1,$car2);
	echo "I like ".$cars[0].", ".$cars[1].", ".$cars[2].".<br />";
?>
<?php  echo"-----------------------------------<br />"; ?>
<?php
	$car0="Volvo";
	$car1="BMW";
	$car2="Toyota";
	$cars=array($car0,$car1,$car2);
	echo count ($cars);
	echo " cars</br>";
?>
<?php  echo"-----------------------------------<br />"; ?>
<?php
	$car0="Volvo";
	$car1="BMW";
	$car2="Toyota";
	$cars=array($car0,$car1,$car2);
	$arrlength=count($cars);
	
	for ($i=0; $i<$arrlength; $i++){
		echo "I love"."\n".$cars[$i].".<br>";
	}
?>
<?php  echo"-----------------------------------<br />"; ?>
<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"40");
	echo "Peter is ".$age["Peter"]." years old </br>";
	echo "Ben is ".$age["Ben"]." years old </br>";
	echo "Joe is ".$age["Joe"]." years old </br>";
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"40");
	
	foreach($age as $x=>$x_value ){
		echo $x.$x_value."<br />";
	}
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$cars=array("Volvo","BMW","Toyota");
	sort($cars);
	
	$arrlength=count($cars);
	for($i=0; $i<$arrlength; $i++){
		echo $cars[$i]."<br/>";
	}
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$cars=array("Volvo","BMW","Toyota");
	rsort($cars);
	
	$arrlength=count($cars);
	for($i=0; $i<$arrlength; $i++){
		echo $cars[$i]."<br/>";
	}
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$car0="Volvo";
	$car1="Nissan";
	$car2="Toyota";
	$car3="Jaguar";
	$cars=array($car0=>"100", $car3=>"89", $car2=>"55", $car1=>"100");
	krsort($cars);
	
	foreach($cars as $car=>$car_value){
		echo "Key=".$car."\n Value=".$car_value."<br/>";
	}
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$car0="Volvo";
	$car1="Nissan";
	$car2="Toyota";
	$car3="Jaguar";
	$cars=array($car0=>"100", $car3=>"89", $car2=>"55", $car1=>"100");
	
	print_r(array_change_key_case($cars,CASE_LOWER));
	echo "<br/>";
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$car0="Volvo";
	$car1="Nissan";
	$car2="Toyota";
	$car3="Jaguar";
	$cars=array($car0=>"100", $car3=>"89", $car2=>"55", $car1=>"100");
	
	print_r(array_change_key_case($cars,CASE_UPPER));
	echo "<br/>";
?>
<?php  echo "-----------------------------------<br />"; ?>
<?php
	$car0="Volvo";
	$car1="Nissan";
	$car2="Toyota";
	$car3="Jaguar";
	$cars=array($car0=>"100", $car1=>"89", $car2=>"55", $car3=>"100");
	echo "array_chunk <br/>",
	print_r(array_chunk($cars,1));
	echo "<br/>";
?>
<?php  
	echo "-----------------------------------<br />"; 
	$name=array("Rahul", "Rohit", "Ronit");
	$age=array("25", "24", "26");
	$c=array_combine($name, $age);
	print_r($c);
?>

<?php  
	echo "<br />--------------Array Count values---------------------<br />"; 
	$name=array("Rahul", "23", "Ronit","Rahul", "23", "23");
	//$c=array_combine($name, $age);
	print_r(array_count_values($name));
?>

<?php  
	echo "<br />-----------------------------------<br />"; 
	$name1=array("Rohit","Ronit","Rahul","Ravi");
	$name2=array("Rohit","Ronit","Rahul","Sonam");
	
	$result=array_diff($name1,$name2);
	print_r($result);
?>

<?php  
	$str = "Hello world!";
echo chunk_split($str,1,"+");
?>


