<?php
$a = 351617;
$b = 'dh';
echo "$a and $b \n";
if ($a == 351617 && $b == 'dh') {
		var_dump($a == 351617 && $b == 'dh');
	echo "Everything looks good! \n";
}
else {
	echo "Kucch to gadbad hai !!! \n";
	var_dump($a != 351617 && $b != 'dh');
}
?>