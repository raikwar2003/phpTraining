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

