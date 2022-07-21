[12:26 PM, 6/15/2022] Nirav Tops: <?php
echo "Numeric Array<br><br><br>";

$var = array("Yogesh",420,9531.2015,"Nirav");
print_r($var);
echo "<br>";
print_r($var[2]);
echo "<br>";
print_r($var[0]);
echo "<br><br><br><br>";


echo "Associative Array<br><br><br>";

$arr = array("x"=>"Php","y"=>"Java","z"=>"Asp.net");
print_r($arr);
echo "<br>";
print_r($arr['x']);
echo "<br>";
print_r($arr['z']);
echo "<br><br><br><br>";


echo "Multiple Array<br><br>";

$var = array(array("a"=>"Hello","World"),20,90,array("b"=>"php","java"),38);
echo "<pre>";
print_r($var["1"]);
echo "<br>";
print_r($var["3"]);
 ?>

 <?php
 $a="JSON";
 print_r(explode(" ",$a));
 echo "<br>";
 ?>