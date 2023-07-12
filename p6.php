<?php
$a=153;
$sum=0;
$x=$a;
while($x>0)
{
    $r=$x%10;
    $sum=$sum+($r*$r*$r);
    $x=$x/10;
}
if($a==$sum)
{
    echo($a. ": It is Armstrong Number:True");
}
else
{
    echo($a.": It is Not Armstrong Number:False");
}
?>