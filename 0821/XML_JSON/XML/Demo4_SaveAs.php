﻿<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("/tmp/employees_bak.xml");
// 存檔
echo "<br>-- Done --";
?>
