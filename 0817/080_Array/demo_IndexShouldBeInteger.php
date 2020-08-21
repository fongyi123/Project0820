<?php

$a = array(
    0.1 => 'A', 
    0.9 => 'B', 
    // A和B都是0,故B會蓋掉A
    '1.1' => 'C');

var_dump($a);

?>
