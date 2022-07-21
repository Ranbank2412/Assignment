<?php

$n=153;
$a=$n;
$b=0;
$c=0;

while($a!=0)
{
    $b=$a%10;
    $c=$c+($b*$b*$b);
    $a=$a/10;
}
if($c==$n)
{
    echo "This number is Armstrong Number.";
}
else
{
    echo "This number is not Armstrong Number.";
}
?>