<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//Given an array of integers, find the one that appears an odd number of times.
//
//There will always be only one integer that appears an odd number of times.
//Examples
//
//[7] should return 7, because it occurs 1 time (which is odd).
//[0] should return 0, because it occurs 1 time (which is odd).
//[1,1,2] should return 2, because it occurs 1 time (which is odd).
//[0,1,0,1,0] should return 0, because it occurs 3 times (which is odd).
//[1,2,2,3,3,3,4,3,3,3,2,2,1] should return 4, because it appears 1 time (which is odd).

function findIt(array $seq)
    {
        $arr = array_count_values($seq);

        foreach ($arr as $key => $val)
        {
            if ($val % 2 == 1)
            {
                return $key;
            }
        }
    }
    var_dump(findIt([1, 3, 4, 4, 3, 1, 1]));
?>
</body>
</html>