<?php

//Esli mi ne znaem skolko chisel v massive , no znaem chto eto dvumerniy mas, to po indeksu
$a = [1,2,3,4,5,6,7,8,9,10,[1,2,3,4,5,6,7,8,9,10]];
$gor = count($a) - 1;
$vert = count($a[$gor]);
for($i = 1; $i<=$gor; $i++) {
	echo PHP_EOL;
    for($j = 1; $j<=$vert; $j++) {
        echo $i*$j.'|';
    }
}
echo PHP_EOL . PHP_EOL;

function pif($a, $b) {
	echo "$a * $b = ";
	echo $a * $b . PHP_EOL;
}

pif(2, 2);
pif(6, 2);
pif(10, 3);
pif(8, 4);
pif(5, 7);
pif(2, 9);
pif(1, 2);
pif(5, 5);
pif(9, 2);
pif(6, 6);


?>
