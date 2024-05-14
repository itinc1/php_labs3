<?php

function matrix($n)
{
    $result = array();
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $result[$i][$j] = 1;
            } else {
                $result[$i][$j] = 0;
            }
        }
    }

    return $result;
}

$n = (int)readline("Введите размерность матрицы: ");

$output = matrix($n);
foreach ($output as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo PHP_EOL;
}
