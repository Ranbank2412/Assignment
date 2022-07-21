<?php
$physics=90;
$chemistry=92;
$biology=85;
$mathematics=97;
$computer=87;
$totalmarks=500;
$obtainmarks=$physics+$chemistry+$biology+$mathematics+$computer;
$percentage=$obtainmarks/$totalmarks*100;

echo "Student Percentage is:-".$percentage."%<br>";

if($percentage>=90)
{
    echo "Your grade id A+.";
}
elseif($percentage>=80)
{

    echo "Your grade id A-.";
}
elseif($percentage>=70)
{
    echo "Your grade id B+.";
}
elseif($percentage>=60)
{
    echo "Your grade id B-.";
}
elseif($percentage>=50)
{
    echo "Your grade id C+.";
}
elseif($percentage>=40)
{
    echo "Your grade id C-.";
}
elseif($percentage>=35)
{
    echo "Your grade id D.";
}
else
{
    echo "You are Fail.";
}

?>