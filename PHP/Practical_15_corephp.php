<?php

$a=array(1,2,3,4,5);
$b=0;
$total=0;
for($i=0;$i<5;$i++)
{
    $total=$total+$a[$b];
    $b++;
}

echo "Total of array elements is = $total";
?>