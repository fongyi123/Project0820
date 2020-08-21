<?php
$doc = new DOMDocument();
$doc->load("employees.xml");

header("Content-type: text/xml", true);
echo $doc->saveXML();
// 輸出的方法之一
?>
