<?php
function cmp($a, $b)
{
    // return $b - $a;
    // 反轉6,5,3,2,1

    // return $a - $b;
    //1,2,3,5,6

    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
    //1,2,3,5,6
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");
// 語言特性，字串變數可以呼叫function
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
    // 快速排序法
}

?>