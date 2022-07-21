<?php

$a = '1';
$b = &$a;
$b = "2$b"; 

echo "after the code executed answer is=".$a."<br>";
echo "after the code executed answer is=".$b;



?>