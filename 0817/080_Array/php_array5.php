<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：<br>";
foreach ($season as $value){
	// 集合項(陣列)處理每一個單項(變數)
	echo $value,"<br>";
}

echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){
	// 集合項(陣列)處理每一個單項(變數)
	echo $value,"<br>";
}

echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){
	// 集合項(陣列)處理每一個單項(變數)
	echo $key, "=>", $value,"<br>";
}

// 兩種方法結果都一樣

?>