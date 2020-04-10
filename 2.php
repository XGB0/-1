<?php
$num = 1;
$num1 = $num;
$num1 = 2;
echo $num,$num1,"\n";

$num2 = &$num;
$num2 = 2;
echo $num,$num2,"\n";

unset($num2);
$num2 = 3;
echo $num,$num2,"\n";


?>