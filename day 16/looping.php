<?php
$i=0;
for($i;$i<10;$i++){
    echo "the umber is ".$i."<br>";
}
echo "<hr>";
for($x=0;$x<=10;$x++){
    echo "the number is ". $x . "<br>";
}
echo "<hr>";

$color=array("red","yellow","orange");
foreach($color as $value){
    echo "$value <br>";
}
echo "<hr>";
$age=array("peter"=>34,"ben"=>35,"mina"=>36);
foreach($age as $x=>$val){
    echo "$x".  " ". "$val <br>";
}
?>