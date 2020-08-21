<?php

$fileDir = dirname ( __FILE__ );
// 把一個資料夾內容秀出來
$fileResource = opendir ( $fileDir );
// 開檔
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>
		<li><?php echo $item; ?></li>
		<!-- 循環處理 -->
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>
<!-- 關檔 -->
</body>
</html>
