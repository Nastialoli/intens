<?php

$a = range(1,10);
$b = range(2,10);
foreach ($a as $value) {
	if (!($value % 2)){
		echo $value . "|";
	}
	else{
		echo "/|";
	}
}
echo PHP_EOL;
foreach ($b as $value2) {
	if (!($value2 % 2)){
		echo $value2 . "|/|/|/|/|/|/|/|/|/|" . PHP_EOL;
	}
	else{
		echo "/|/|/|/|/|/|/|/|/|/|" . PHP_EOL;
	}
	
}


?>