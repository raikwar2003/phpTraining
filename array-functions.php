<?php 
$a=array("BMW","Suzuki","Mercedez","Hyundai","Honda","Mercedez","Hyundai");
$d=array("BMW"=>"22","Volvo"=>"33","Mercedez"=>"44","Hyundai"=>"55","Honda"=>"66");
$x=array("BMW","Volvo","Mercedez","Hyundai","Honda","Suzuki");
$y=array("11","22","33","44","55","66");


echo "==========array_change_key_case() Function==========<br>";
print_r(array_change_key_case($d, CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($d, CASE_LOWER));

echo "<br><br>==========array_chunk() Function==========<br>";
print_r(array_chunk($x, 3));

echo "<br><br>==========array_combine() Function==========<br>";
print_r(array_combine($x, $y));

echo "<br><br>==========array_count_values() Function==========<br>";
print_r(array_count_values($a));

echo "<br><br>==========array_diff() Function==========<br>";
print_r(array_diff($a,$x));

echo "<br><br>==========array_diff_assoc() Function==========<br>";
print_r(array_diff_assoc($a,$x));

echo "<br><br>==========array_fill() Function==========<br>";
print_r(array_fill(5, 6, "Red"));

echo "<br><br>==========array_fill_keys() Function==========<br>";
print_r(array_fill_keys($x, $y));

echo "<br><br>==========array_flip() Function==========<br>";
print_r(array_flip($d));

echo "<br><br>==========array_intersect() Function==========<br>";
print_r(array_intersect_assoc($a, $x));

echo "<br><br>==========usort() Function==========<br>";
function my_sort($y,$s)
{
	if($y==$s)
	{
		return true;
	}
	return ($y<$s)?false:true;
}
//$x=array(4,2,8,6);
usort($y, "my_sort");
print_r($y);
?>