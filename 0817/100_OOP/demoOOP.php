<?php

class Animal{
    public function __construct($weightValue =1){
        $this ->while = $weightValue;
        echo "Object created.<br>";
        // new完之後建構式立刻執行
    }
    function __destruct() {
		echo "Object destroyed.<br>";
	}
    public $weight = 1;
    public function makeNoise() {
        echo "Animal:.......................<br>";
    }
}
echo "Flag 1<br>";
$obj = new Animal();

echo "Flag 2<br>";
// $obj ->makeNoise();
$obj2 =$obj;
$obj = null;
echo "Flag 3<br>";
$obj2 = null;
echo "Flag 4<br>";




// php沒有分大小寫，但是建議分會比較好
// $obj ->while = 10;
// 物件有分大小寫
echo $obj ->while,"<br>";
// $obj ->location = "Taichung";
// echo $obj ->location , "*";



?>