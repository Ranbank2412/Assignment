<?php
//echo "*****<br>* &nbsp; &nbsp; &nbsp; *<br>* &nbsp; &nbsp; &nbsp; *<br>* &nbsp; &nbsp; &nbsp; *<br>*****";
for($i=1;$i<=5;$i++)
{
    for($o=1;$o<=5;$o++)
    {
        if($i==1 || $i==5)
        {
            echo "*";
        }
        else
        {
            if($o==1 || $o==5)
            {
                echo "*";
            }
            else
            {
                echo "&nbsp; ";
            }
        }

    }
    echo "<br>";
}

?>