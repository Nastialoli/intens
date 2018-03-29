<?php

//Esli mi ne znaem skolko chisel v massive , no znaem chto eto dvumerniy mas, to po indeksu
$a = [1,2,3,4,5,6,7,8,9,10,[1,2,3,4,5,6,7,8,9,10]];
$gor = count($a) - 1;
$vert = count($a[$gor]);
for($i = 1; $i<=$gor; $i++) {
	echo PHP_EOL;
    for($j = 1; $j<=$vert; $j++) {
    	if (!($i*$j % 2)){
    		echo $i * $j.'|';

    	}
        else{
        	echo '/|';
        }
    }
}
?>