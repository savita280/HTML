<?php
$i=1;
$j=0;
while($i<=10){
    $j+=$i;
    $i++;
}
echo "average of 10 sequential no:s,start from 1 to 10" .  ($j/10);



$a=array(1,3,5,7,9);
echo "<pre>";
print_r($a);
$sum=0;
$b=count($a);
foreach($a as $value){
    $sum=$sum+$value;
    
}
$c=$sum/$b;
echo "the average is:".$c."<br>";
echo "sum of the given no: is "." ".$sum;



?>