<?php

echo "For Finding Leap Year between 1901 to 2016";
echo "<br/>" ;

for($year=1901; $year<=2016; $year++)
{
    if ( $year % 4 == 0 )
    {
        if($year % 400 == 100 || $year % 400 == 200 || $year % 400 == 300)
        {
            echo $year;
            echo " :Not a Leap Year ";
            echo "<br/>";
        }
        else 
        {
            echo $year;
            echo " :Is a Leap Year ";
            echo "<br/>";
        }
    }
    else
    {       
        echo $year;
        echo " :Not a Leap Year ";
        echo "<br/>";
    }    
}
?>