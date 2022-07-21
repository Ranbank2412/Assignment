<?php
$a=array(array(20.10,65.25,45.31,32.14,39.09),array(10.52,85.24,45.91,62.82,82.56),array(52.81,65.25,45.92,69.33,77.99));
?>
<table border=1>
    <tr>
        <?php foreach($a[0] as $x)
        {
            ?><td><?php echo $x;?></td><?php
        }?>
    </tr>
    <tr>
        <?php foreach($a[1] as $y)
        {
            ?><td><?php echo $y;?></td><?php
        }?>
    </tr>
    <tr>
        <?php foreach($a[2] as $z)
        {
            ?><td><?php echo $z;?></td><?php
        }?>
    </tr>


</table>



