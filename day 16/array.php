<?php
$array1=array("d"=>50,"b"=>60,"c"=>70);
print_r($array1);
echo "<br>";
echo "<hr>";
$array2=array(80,60,70);
print_r($array2);
echo "<br>";
echo "<hr>";
$brac=array("10","20");
print_r($brac);
echo "<br>";
echo "<hr>";


$array3=array(
array("banana"=>30),

array("apple"=>40),

array(50,60,70)
);
print_r($array3);
echo "<br>";
echo "<hr>";

$array4=array(
    "first"=>array("first"=>"apple"),
    "second"=>array("second"=>"orange",
    "third"=>array("third"=>"banana")
    )
);
echo "<pre>";
print_r($array4);

rsort($array1);
ksort($array1);

print_r($array1);
print_r($array1);

sort($array1);
print_r($array1);


?>
