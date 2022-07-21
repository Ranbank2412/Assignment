<?php
$a=123456789;
echo "Value is=$a<br>";
$b=0;
$z=$a;
while($z>0)
{
    
    $c=$a%10;
    $z=($z-$c)/10;
    $b=($b*10)+$c;
    $a=($a-$c)/10;
}

echo "Reverse Value is=$b";

?>