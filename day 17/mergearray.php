<?php
$a=array(1,2,3,4,5);
$b=array(6,7,8,9,10);
echo "first array";
print_r($a);
echo "<br>second array";
print_r($b);
$ans=array_merge($a,$b);
echo "<br> after merging";
echo "<pre>";
print_r($ans);


?>