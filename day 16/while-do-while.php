<?php
//while loop
$x=1;
while($x<=5){
    if($x==3){
        break;
    }
    echo "the  number is : $x <br>";
    $x++;
}
echo "<hr>";

//do-while loop
$y=1;
do{
    echo "the  number is : $y <br>";
    $y++; 
}while($y<10);


$z=1;
while($z<=5){
    if($z==3){
       continue;
    }
    echo "the  number is : $z <br>";
    $z++;
}






?>