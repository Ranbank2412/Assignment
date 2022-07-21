<?php
$n=1;
$a=0;
$b=1;
echo "$a, $b";
do
{
    $i=$a+$b;
    echo ",&nbsp".$i;
    $a=$b;
    $b=$i;
    $n++;
}
while($n<=8);
?>