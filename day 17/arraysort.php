<?php
//using ksort
echo "the original array is <br>";
$a=array("1"=>"nikhil","4"=>"vivek","2"=>"harsh","3"=>"yash");
echo "<pre>";
print_r($a);
echo "after sorting<br>";
ksort($a);
echo "<pre>";
print_r($a);

//using sort
echo "the original array is <br>";
$a=array("nikhil","vivek","harsh","yash");
echo "<pre>";
print_r($a);
echo "after sorting<br>";
sort($a);
echo "<pre>";
print_r($a);
?>