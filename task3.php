<?php

function isPerfectNumber($num)
{
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $num;
}


for ($num = 1; $num <= 1000; $num++) {
    if (isPerfectNumber($num)) {
        echo $num . " - идеальное число." . PHP_EOL;
    }
}
