<?php
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';
// $bloodType[] = 'O';
$bloodType[4] = "O";
// print_r($bloodType);

var_dump($bloodType);
// 結果：array(4) { [0]=> string(1) "A" [1]=> string(1) "B" [2]=> string(2) "AB" [3]=> string(1) "O" } A

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
?>

<p>
line1<br>
&nbsp;&nbsp;line2<br>
&nbsp;&nbsp;&nbsp;&nbsp;line3
</P>

<pre>
<?php print_r($bloodType); ?>
</pre>