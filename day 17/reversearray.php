<?php
$a=array("pineapples","banana","grapes","mango");
print_r($a);
echo "<br> using count";
echo "<br> <br> no: of element in array".count($a);


echo "<br>using sorting<br>";
sort($a);
echo "<pre>";
print_r($a);
echo "<br> using reverse array<br>";
print_r(array_reverse($a));

echo "<br>using list <br>";
list($f1,$f2,$f3,$f4)=$a;
echo "<br> after sorting the fourth item"." " .$f2;
?>
