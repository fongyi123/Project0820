<?php
// $userNmne="Ian";
// echo "user name: $userNmne";
// echo "OK";
// echo $userNmne;

// $x = 12;
// $y = 13;

// $result=  $x . $y;
// echo $result;
// 結果：1213
// .句號相連


// $result=  $x + $y;
// echo $result;
// 結果：25
//+加號相加

// $x = 1 ;
// $y = "0x10";
// "0x10"沒有被視為十六進位
// echo $x + $y;
// 結果：1

// $x = 0xa;
// $y = 0x10;
// 十六進位的0x10=十進位的16
// echo $x + $y;
// 結果：26

// phpinfo();

// $x = 100;
// $y = $x;
// $x = 200;
// echo $y;
// 結果：100
// y記住x值

// $x = 100;
// $y = &$x;
// &$指向記憶體
// $x = 200;
// echo $y;
// 結果：200
// y記住x的記憶體

// $x = 100 ;

// function foo(){
//     global $x;
//     // 加上global才能拿到別的變數，否則都只能看到自己
//     if (isset($x)){
        
//         echo $x;
//     }
//     else {
//         echo '$x not exists';
//     }
// }
// foo();
// 每個function都只能看到自己的區域變數，需要加上global才能看到全域變數

// $s = "012345671289";
//       ^^^^
//3456
// $result = substr($s,3,4);
// $result = str_replace("12","-",$s);
                    //目標, 對象
//  0-34567
// echo $result;

// $pos = strpos($s, "12");
// echo $pos;

// $pos = strpos($s, "xxx");

// echo gettype($pos);
// echo "<br>Done.";

// $pos = strpos($s, "012");

// if($pos){
//     echo "found: $pos";
// }
// else{
//     echo "not fond";
// }
// https://stockwfj3.pixnet.net/blog/post/66773997--->參考網址

?>