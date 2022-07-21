<?php
//echo "*****<br>* &nbsp; &nbsp; &nbsp; *<br>* &nbsp; &nbsp; &nbsp; *<br>* &nbsp; &nbsp; &nbsp; *<br>*****";
for($i=1;$i<=5;$i++)
{
    for($o=1;$o<=5;$o++)
    {
        if($i==1)
        {
            echo "*";
        }
        elseif($i==2 || $i==3)
        {
            if($o==4)
            {
                echo "*";
            }
            else
            {
                echo "&nbsp; ";
            }
            
        }
        elseif($i==4)
        {
            if($o==2 || $o==4)
            {
                echo "*";
            }
            else
            {
                echo "&nbsp; ";
            }
        }
        else
        {
            if($o==2 || $o==3 || $o==4)
            {
                echo "*";
            }
            else
            {
                echo "&nbsp; ";
            }
        }
        echo "&nbsp; ";
    }
    echo "<br>";
}

?>