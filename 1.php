<?php
$str = <<< SSTR
hello 
world!
\\
SSTR;

echo $str;

$str = <<< 'SSTR'
hello 
world!
\\
SSTR;

echo $str;
?>