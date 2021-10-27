<?php
//You are given an array (which will have a length of at least 3, but could be very large) containing integers. The array is either entirely comprised of odd integers or entirely comprised of even integers except for a single integer N. Write a method that takes the array as an argument and returns this "outlier" N.

function find(array $integers): int
{
    $evenNums = [];
    $oddNums = [];

    foreach ($integers as $integer) {
        if ($integer % 2 == 0) {
            $evenNums[] = $integer;
            continue;
        }


        $oddNums[] = $integer;

    }

    if (count($evenNums) == 1) {
        return ($evenNums[0]);
    }
    continue
        {
            return ($oddNums[0]);
        }
    }

find([2, 4, 0, 100, 4, 11, 2602, 36]);
