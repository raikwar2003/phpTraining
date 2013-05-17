<?php
$x = array("volvo", "hyundai", "honda", "mercedez");
$y =array("35", "45", "55", "65");
$z = array("volvo", "hyundai", "honda", "mercedez", "yamaha");
$a = array("volvo", "hyundai", "honda", "mercedez", "yamaha", "hyundai", "honda");
echo "---------------------------------------------<br>ARRAY FUNCTIONS<br>---------------------------------------------<br>";
print_r(array_chunk($x,1));
echo "<br/>";

print_r(array_combine($x,$y));
echo "<br/>";

print_r(array_diff($z,$x));
echo "<br>";

print_r(array_count_values($a));
echo "<br>";

print_r(array_intersect($x,$z));



echo "<br>---------------------------------------------<br>STRING FUNCTIONS<br>---------------------------------------------<br>";

$str1 = "Hello World!";
$str2 = "here are all 5 string funtions";

echo addcslashes("$str1", "e");
echo "<br>";

echo addslashes("It's not my problem");
echo "<br>";

echo chunk_split($str2,3,"*");
echo "<br>";

echo chop($str2,"ons");
echo "<br>";

echo $str1;
echo "<br>";
echo $str2;
echo "<br>";
echo similar_text($str1,$str2,$percent);