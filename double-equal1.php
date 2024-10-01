<?php
$a = 351617;
$b = 'dh';
echo "$a and $b";
echo PHP_EOL;
$x = 32;
$y = 32;
echo "$x and $y \n";
if ($a === $b) {
	echo "Data type and Value both or equal in $a and $b \n";
	var_dump($a === $b);
}
if ($x === $y) {
echo "Data type and Value both or equal in $x and $y \n";
	var_dump($x === $y);
}
else {
	echo "value or data type is different \n";
	var_dump($a === $y);
	var_dump($x === $y);
}
?>