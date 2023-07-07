<?php
     $x=10;
     $y=20;
     $sum=$x + $y;
     $sub=$x - $y;
     $mul=$x * $y;
     $div=$x / $y;
     $div1=$y / $x;
     $div2=(float)($x/$y);

     echo "X = ".$x."<br>";
     echo "Y = ".$y."<br>";
     echo "Sum = ".$sum."<br>";
     echo "Sub = ".$sub."<br>";
     echo "Mul = ".$mul."<br>";
     echo "Div = ".$div."<br>";
     echo "Div1 = ".$div1."<br>";
     echo "Div2 = ".$div2."<br>";

     var_dump($sum);
?>