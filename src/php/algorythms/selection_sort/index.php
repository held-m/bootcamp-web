<?php

/*
Selection Sort
- sorting a list
- Running Time O(n²)
- not very fast

 */

function findSmallest(array $arr)
{
    $smallest = $arr[0];
    $smallest_index = 0;

    for ($i = 1; $i < count($arr); $i++)
    {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

function selectionSort(array $arr) : array
{
    $newArr = [];
    $arrCount = count($arr);

    for ($i = 0; $i < $arrCount; $i++)
    {
        $smallestIndex = findSmallest($arr);
        $smallestValue = $arr[$smallestIndex];

        array_push($newArr, $smallestValue);
        unset($arr[$smallestIndex]);
        $arr = array_values($arr);
    }

    return $newArr;
}

$newArr = selectionSort([5, 3, 6, 2, 10]);
print_r($newArr);