<?php

//You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.

function sortArray(array $arr)
{
    $oddNums = [];
    $evenNums = [];

    foreach ($arr as $keyArr => $numArr) {
        if ($numArr % 2 == 1) {
            $oddNums[$keyArr] = $numArr;
        } else {
            $evenNums[$keyArr] = $numArr;
        }
    }

    $oldOddNums = $oddNums;

    sort($oddNums);
    //var_dump($oddNums);

    $flippedOldOdd = flipped($oldOddNums);
    //$flippedOldOdd = array_flip($oldOddNums);
    //-> berücksichtigt nicht die doppelten Werte

    $combArr = array_combine($flippedOldOdd, $oddNums);

    //$replaced = array_replace($arr, $combArr);
    //var_dump($replaced);

    $newArr = $combArr + $evenNums;
    ksort($newArr);
    var_dump($newArr);
}


function flipped(array $oldOddNums) : array
{
    $flippedOldOdd = [];
    foreach ($oldOddNums as $oldOddKey => $oldOddVal)
    {
        $flippedOldOdd[$oldOddKey] = $oldOddKey;
    }
    var_dump($flippedOldOdd);
    return $flippedOldOdd;
}

sortArray([5, 3, 2, 8, 1, 4]);
/*
function sortArray(array $arr): array
{
    $oddNums = [];
    $evenNums = [];
    $oddKeys = [];

    foreach ($arr as $keyArr => $numArr) {
        if ($numArr % 2 == 1) {
            $oddNums[$keyArr] = $numArr;
            foreach ($oddNums as $keyOdd => $numOdd) {
                $oddKeys[] = $keyOdd;
            }
        } else {
            $evenNums[$keyArr] = $numArr;
        }
    }

    sort($oddNums);
    var_dump($oddKeys);
    var_dump($oddNums);
    var_dump($evenNums);

    $arrNew = $oddNums + $evenNums;
    var_dump($arrNew);
    return $arrNew;
}
*/
/*
function sortArray(array $arr)
{

    getAllOddsNums(array $arr);
    getEvenNums(array $arr);
    sortValOddNums(array $oddNums);

    array_replace(array $arr, array $sortedArray);
    return $arr;
}

function getAllOddsNums(array $arr): array
{
    $oddNums = [];

    foreach ($arr as $keyArr => $numArr) {
        if ($numArr % 2 == 1) {
            $oddNums[$keyArr] = $numArr;
        }
    }
    return $oddNums;
}

/*function getEvenNums(array $arr): array
{
    $evenNums = [];

    foreach ($arr as $keyArr => $numArr) {
        if ($numArr % 2 == 0) {
            $evenNums[$keyArr] = $numArr;
        }
    }
    return $evenNums;
}
*/
/*
function sortValOddNums(array $oddNums) : array
{
    $copyOddNums = $oddNums;
    sort($copyOddNums);
    return $sortedArray;
}



sortArray([5, 3, 2, 8, 1, 4]);
*/


?>
