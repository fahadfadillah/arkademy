<?php

$x = 5956560159466056;
$explode = explode(0, $x);
foreach ($explode as $number) {
    $y = str_split($number);
    sort($y);
    $new[] = implode('', $y);
}

$implode = implode('', $new);

echo $implode;
