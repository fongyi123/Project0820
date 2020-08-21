<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
// file("檔名")－－>陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
		//  把<>處理過，基於資安關係
}

?> 