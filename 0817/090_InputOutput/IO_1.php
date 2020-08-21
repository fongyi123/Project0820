<?php

echo "Path and FileName:" . __FILE__ . "<br />";
// 告訴這個檔案的檔名和位置
echo "Path: " . dirname ( __FILE__ ). "<br />";
//路徑
echo "Filename: " . basename ( __FILE__ ) . "<br />";
//檔名
echo "Filesize: " . filesize ( __FILE__ )
//大小 
?>
