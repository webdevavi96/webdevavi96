<?php
echo "Enter any number or string: \n";
$a = readline();
echo PHP_EOL;
echo "Enter second number or string: \n";
$b = readline();
if ($a === $b) {
	echo "Data type and Value both or equal\n";
	var_dump($a === $b);
}
else {
	echo "value or dqta type is different\n";
	var_dump($a === $b);
}
?>