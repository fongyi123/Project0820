<?php

function ShowStar() {
	$args = func_get_args();
	
	if (!isset($args[0]))
	// !假定沒有設定
		$args[0] = 5;
	if (!isset($args[1]))
		$args[1] = "*";
	ShowStar_all($args[0], $args[1]);
}
// 此方法為overloading多載(同名方法但有多類型參數)

function ShowStar_all($iCount, $sWhat = "*")
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

// ShowStar(2, "^");
// ShowStar(null, "$");
ShowStar();
?>