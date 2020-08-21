<?php

$x = 100;
$y = &$x;

$y = 200;
echo "x = $x </br>";

unset($x);
// 清除x的記憶體，之後的y回到原本的記憶體（本尊）
echo "y = $y </br>";

?>