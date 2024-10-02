<?php
echo "Eter Two numbers to check they are equal or not \n";
echo "First Number: \n";
$num1 = readline();
echo PHP_EOL;
echo "Second Number: \n";
$num2 = readline();
if ($num1 != $num2) {
	echo "$num1 is not equal to $num2";
}
else {
	echo "$num1 is equal to $num2";
}
echo PHP_EOL;
?>