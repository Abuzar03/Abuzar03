<?php
$numbers=array(11,23,72,44);
foreach($numbers as $number)
{ 
    if($number%2==0)
    {
        echo "$number. :It is Even Number<br>";
    }
    else
    {
        echo "$number. :It is Odd Number<br>";
    }
}
?>