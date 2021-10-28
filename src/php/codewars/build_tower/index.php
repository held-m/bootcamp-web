<?php

//Build Tower by the following given argument:
//number of floors (integer and always greater than 0).
//Tower block is represented as *
// return value should be array
//for example, a tower of 3 floors looks like below
//[
//  '  *  ',
//  ' *** ',
//  '*****'
//]

function tower_builder(int $n): array
{
    $tree = [];

    for ($i = 1, $k = $n - 1; $i <= $n +2, $k >= 0; $i = $i +2, $k--)
    {
        $star = str_repeat('*', $i);

        $empty = str_repeat(' ', $k);


        $tree[] = $empty.$star.$empty;
    }
    var_dump($tree);
    return $tree;
}


tower_builder(6);

/*
function tower_builder(int $n): array {
    $tree = [];
    $k = ($n + 1)/2;

        for ($i = 0, $j = $k + 1; $i <= $n + 2, $j >= 0; $i++, $j--)
        {
            if ($i % 2 == 1)
            {
                $star = str_repeat('*', $i);

                $emptys = str_repeat(' ', $k);

                $tree[] = $emptys.$star.$emptys;
            }
        }

        var_dump($tree);
        return $tree;
}
*/

