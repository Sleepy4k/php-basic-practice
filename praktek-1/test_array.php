<?php

//test var
$i=2;
$j=3;
$nama="Budi";
echo "Halo $nama <br>";
echo 'Halo $nama <br>';
echo "Halo {$nama} <br>";
echo "I+J= {$i}+{$j} <br>";
echo "I+J= " . $i+$j . " <br>";
$k=$i+$j;
echo "I+J= {$k} <br>";

//test array

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";

$a = "Hello";
echo "a is " . is_array($a) . "<br>";

$b = array("red", "green", "blue");
echo "b is " . is_array($b) . "<br>";

$people = array("Peter", "Joe", "Glenn", "Cleveland");
if (in_array("Glenn", $people)){
  echo "Match found<br>";
}

$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo "<br>";

$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
echo "<br>";

$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))  {
  echo "Key exists!<br>";
}
else {
  echo "Key does not exist!<br>";
}
echo "<br>";

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
echo "<br>";
print_r ($a);
echo "<br>";

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";

$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br>";

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
echo "<br>";

function myfunction($v){
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
echo "<br>";

?>
