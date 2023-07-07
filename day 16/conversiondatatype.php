<?php
$x="123.abc";
echo "a=".$x;
echo "<br>type of a  " . gettype($x);
settype($x,"int");
echo "<br> after conversion of a is  " . gettype($x);
?>