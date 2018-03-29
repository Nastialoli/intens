<?php

//Esli mi ne znaem skolko chisel v massive , no znaem chto eto dvumerniy mas, to po indeksu
// $a = [1,2,3,4,5,6,7,8,9,10,[1,2,3,4,5,6,7,8,9,10]];

// for($i = 1, $gor = count($a) - 1; $i<=$gor; $i++) {
// 	echo PHP_EOL;
//     for($j = 1, $vert = count($a[$gor]); $j<=$vert; $j++) {
//         echo $i*$j.'|';
//     }
// }

$zz = range(1, 10);
$ss = range(1, 10);
for($i = 1; $i<=$zz[9]; $i++) {
	echo PHP_EOL;
    for($j = 1; $j<=$ss[9]; $j++) {
        echo $i*$j.'|';
    }
}

?>
