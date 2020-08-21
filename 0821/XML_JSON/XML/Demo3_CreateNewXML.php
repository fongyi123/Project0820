<?php
$doc = new DOMDocument("1.0", "utf-8");
$root = $doc->createElement("HTML");
        // 建立元素-->工廠方法，工廠類別
$root2 = $doc->createElement("CSS");


$doc->appendChild($root);
$root->appendChild($root2);
// 子元素
echo htmlspecialchars($doc->c14n());
?>
