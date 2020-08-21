<?php
require_once "ClassLib.php";
// 要先讓session知道要處理的資料
session_start();
// 存入的資料會重覆生滅
if (!isset($_SESSION["obj"])) {
	// 如果沒有obj...
	$obj = new CDog(1, 10);	
	$_SESSION["obj"] = $obj;
}
else {
	$obj = $_SESSION["obj"];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php echo "Weight = " . $obj->getWeight() . "<br>"?>
	<?php echo "Price = " . $obj->getPrice() . "<br>"?>
	<hr>
	<a href="page2.php">Link to Page2</a><br>
</body>
</html>