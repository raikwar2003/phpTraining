<?php

$arr = array('5','4', '3', '2', '1');

for ($i=0;$i<count($arr); $i++) 
	echo $i. "=> ".$arr[$i] . "<br />";
	
foreach($arr as $item){
	echo "<br />".++$item;
}
?>


<?php

$choice = "adsfs";
switch($choice) {

	case "add":
			echo "Add";
			break;
	case "subtract":
			echo "Subtract";
			break;
	default:
		echo "Match operation not permitted </br>";

}

$arr = array('5','4','3','2','1');

for ($i=0;$i<count($arr); $i++) 
	echo $i. "-".$arr[$i]."\n" ;
?>


<?php

function add($a, $b) {
	$x="";
	$x = "$a"."  "."$b"."  ";
	return $x;
}

$c = add(3,5);
//echo $c;
echo add($c, 10);


/*$str = "";
strlen($str);
echo strpos("Hello world!","world");*/
?>


<?php
echo "Hello World";
?>

<?php 
	$a = "Hello World";
	$b = "2013";
	$c = "13"
?>

<h4 class="span12">
	<?php 
		//echo "$a"."$b" ;
		echo "$a ";
		echo " $b-$c";
		echo "=".$b-$c;
	?>
</h4>
