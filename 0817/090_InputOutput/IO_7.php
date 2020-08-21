<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
// 支援代號，後續f都依賴他
// fopen也可以用fread
while (!feof($f))
{
	$line = fgets($f);
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
