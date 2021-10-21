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

/**
Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
It should remove all values from list a, which are present in list b keeping their order.
arrayDiff([1,2],[1]) == [2]
If a value is present in b, all of its occurrences must be removed from the other:
arrayDiff([1,2,2,2,3],[2]) == [1,3]
*/

$a = [1, 2, 3, 2];
$b = [2];

//i will be index of $a
// num is the number of $a, and $num2 of $b
function arrayDiff($a, $b)
{
    foreach ($a as $i => $num)
    {
        foreach ($b as $num2) {
            if ($num == $num2) {
                unset($a[$i]);

            }
        }
    }
    sort($a);
    return $a;
}
var_dump(arrayDiff($a, $b));
?>
</body>
</html>