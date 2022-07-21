<?php
$a=1;
$b=$a;
for($o=0;$o<4;$o++)
{
    $a=$b;
   
    for($i=0;$i<3;$i++)
    {
        echo $a." ";
        $a=$a+4;
    
    }
    $b++;
    echo "<br>";
}
?>