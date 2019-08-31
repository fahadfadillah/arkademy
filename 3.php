<?php

$numbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 27];
$x = 5;

for ($i=0; $i < $x; $i++) {
    for ($j=0; $j <= $i; $j++) {
        echo $numbers[$j];
    }
    echo "\n";
}
