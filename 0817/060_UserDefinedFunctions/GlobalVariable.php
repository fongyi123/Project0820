<?php
$a = 20;
//$c = 60;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";-->a=30
	global $a, $c;
	//echo "a = $a<br>";-->a=20
	return $c = ($b + $a); // 40+20-->$C=60
}
// 請預測答案是多少?
echo myFunction(40) + $c;
?>