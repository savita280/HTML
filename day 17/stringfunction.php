<?php
$str="apple's lab";
$result=addslashes($str);
echo $str ."<br>";
echo $result;
echo "<br> <br> <br>";

$str1="rakesh,ramesh,suresh,mahesh";
$result=explode(',',$str1);
echo "<pre>";
print_r($result);
echo "<br> <br> <br>";

$str="hello world it's a beutiful day";
print_r(explode(" ",$str));
echo "<pre>";
echo "<br> <br> <br>";

$implode=implode(' ',$result);
echo $implode;
echo "<br> <br> <br>";

echo strpos("hello... hiii good morning","hiii");
echo "<br> <br> <br>";

echo strlen("hello...");
echo "<br> <br> <br>";

echo stripos("hello... hiii good morning","hiii");
echo "<br> <br> <br>";

echo strrpos("hello... hiii good morning","hiii");
echo "<br> <br> <br>";

$htmlentity="&lt;H&gt;";
htmlentities($htmlentity);
echo $htmlentity;
echo "<br> <br> <br>";

html_entity_decode($htmlentity);
echo $htmlentity;
echo "<br> <br> <br>";

$text="THIS IS NICE TEXT";
echo lcfirst($text);
echo "<br> <br> <br>";

$text="this is nice text";
echo ucfirst($text);
echo "<br> <br> <br>";

$text="this is nice text";
echo ucwords($text);
echo "<br> <br> <br>";

$psw="abc@123";
echo md5($psw);
echo "<br>";

$psw1="abc@123";
echo sha1($psw1);
echo "<br>";

$text="     abc@132";
echo ltrim($text);
echo "<br>";

$text="     abc@132       ";
echo trim($text);
echo "<br>";

$text="     abc@132      ";
echo rtrim($text);
echo "<br>";

$rtext="helloooo";
$text2="good morning";
echo str_replace("good",$rtext,$text2);
echo "<br>";

$amount=1000;
$nformat=number_format($amount,2);
echo $nformat;



?>