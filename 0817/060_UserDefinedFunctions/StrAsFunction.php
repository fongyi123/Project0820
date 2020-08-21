<?php

function test10($i) {
	return $i + 10;
}

function test100($i) {
	return $i + 100;
}

// $x = 1;
// echo test($x);---->2


$x = 2;
$p = "test10";
// $p = "test100";
// 呼叫字串所說的function
echo $p($x);
// -->2+10=12
// -->2+100=102

?>