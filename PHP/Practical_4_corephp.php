<?php
$x=10;
$y=20;
$z=30;

echo "X=$x<br>Y=$y<br>Z=$z"."<br>";


$max= (($x>$y&&$x>$z)?$x:(($y>$z)?$y:$z));
echo "Maximum Value is ".$max.".";
?>