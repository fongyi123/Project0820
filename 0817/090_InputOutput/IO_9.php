<?php
header("Content-Type: image/png");
// 告訴瀏覽器網頁內容類型

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
            // 打開檔案
echo fread($fileHandle, filesize($filename));
// 讀檔案                檔案大小
fclose($filename);

?>