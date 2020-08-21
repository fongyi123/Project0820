<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	// 字串排法
	var_dump($testArray);
	// A1->A18->A2
	echo "<br />";
	
	natsort($testArray);
	// 自然排序法
	// A1->A2->A18
	var_dump($testArray);

?>
