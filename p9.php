<?php
$color=array("White","Green","Red");
foreach($color as $c)
{
    echo $c;
}
sort($color);
foreach($color as $y)
{
    echo "<li>$y</li>";
}
?>