<?php

$obj = new CAnimal();
$obj->makeNoise();
echo "<hr>";

$obj->weight = 10;  // 如果是 $obj->weight = -10; 呢
echo $obj->weight;


class CAnimal
// 類別
// private
{
	
	public $weight;
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
}

?>
