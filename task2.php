<?php

function findSecondSmallestAndLargest($arr)
{
    $n = count($arr);

    if ($n < 2) {
        return "Массив должен содержать как минимум два элемента";
    }

    sort($arr);

    $secondSmallest = $arr[1];
    $secondLargest = $arr[$n - 2];

    return array("Второе наименьшее число" => $secondSmallest, "Второе наибольшее число" => $secondLargest);
}


$arr = [15, 7, 23, 5, 10, 12];
$result = findSecondSmallestAndLargest($arr);
print_r($result);
