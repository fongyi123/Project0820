<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器
//    @錯誤暫時不顯示                                             or可以用||代替
$link = @mysqli_connect("localhost", "root", "root",null,8889) or die(mysqli_connect_error());
// var_dump($link);
//                查詢   連線目標  字元集utf8
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "class");

// 2. 執行 SQL 敘述
$commandText = "select * from students";
$result = mysqli_query($link, $commandText);
// var_dump($result);

// echo $result ->num_rows;
// $row = mysqli_fetch_assoc($result);



// 3. 處理查詢結果
while ($row = mysqli_fetch_assoc($result))
{
    // 如果是陣列的話，要用大括號包起來
  echo "ID：{$row['cID']}<br>";
  echo "Name：{$row['cName']}<br>";
  echo "<HR>";
}

// 4. 結束連線
mysqli_close($link);

// echo "<br />-- Done --";
?>
