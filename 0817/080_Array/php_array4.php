<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array(
        'myName'    =>'Jeremy', 
        'myHeight'  =>191, 
        'myWeight'  =>91);
        // =>箭頭指向
    echo "大家好，我的名字叫".$myArray['myName']
    // echo "大家好，我的名字叫".$myArray[0]
    // 此陣列沒有編號故陣列[0]找不到值


?>