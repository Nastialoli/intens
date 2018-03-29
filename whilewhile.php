<?php

//Esli mi ne znaem skolko chisel v massive , no znaem chto eto dvumerniy mas, to po indeksu
$a = [1,2,3,4,5,6,7,8,9,10,[1,2,3,4,5,6,7,8,9,10]];
$gor = count($a) - 1;
$vert = count($a[$gor]);
$i = 1;
while ($i <= $gor){
	echo PHP_EOL;
	$f = 1;
	while ($f <= $vert){
		echo $i * $f.'|';
		$f++;
	}
	$i++;
}

?>
