<?php
$number=array('1','2','3','4','5');
echo "Original Array <br>";
foreach($number as $num)
{
    echo $num."<br>";
}
$insert='6';
array_splice($number,2,0,$insert);
echo "After Inserting New Item <br> ";
foreach($number a s $num)    
echo "$num <br>";
?>
