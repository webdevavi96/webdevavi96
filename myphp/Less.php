<?php
echo "Eter Two numbers to check which is less than other";
echo "First Number: \n";
$num1 = readline();
echo PHP_EOL;
echo "Second Number: \n";
$num2 = readline();
if ($num1 < $num2) {
	echo "$num1 is less than $num2";
}
else {
	echo "$num2 is less than $num1";
}
echo PHP_EOL;
?>