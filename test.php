<?php
// Create connection
$con=mysqli_connect("localhost","root","","ravi");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<?php
function key_comp_func($a,$b)
{
if ($a===$b)
  {
  return o;
  }
  return ($a>$b)?1:-1;
}

$a1=array("red","green","blue","yellow");
$a2=array("red","green","white");

$result=array_diff_uassoc($a1,$a2,"key_comp_func");
print_r($result);
?>