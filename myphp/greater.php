<?php
echo "Eter Two numbers to check which is greater than other";
echo "First Number: \n";
$num1 = readline();
echo PHP_EOL;
echo "Second Number: \n";
$num2 = readline();
if ($num1 > $num2) {
	echo "$num1 is greater than $num2";
}
else {
	echo "$num2 is greater than $num1";
}
echo PHP_EOL;
?>