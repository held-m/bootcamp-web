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
    function  hello($name): void
    {
        echo "Hello I am $name"."<br>";
    }

    hello("Saskia");
    hello('Brad');

    echo '<br>';

    /*function sum(...$numbers): mixed
    {

        $summe = 0;
        for ($i = 0; $i < 6; $i++) {
            $summe += $numbers[$i];
        }
        return $summe;
    }*/

    /*function sum(...$numbers): mixed
    {
        $sum = 0;
        foreach($numbers as $n) {
            $sum += $n;
        }
        return $sum;
    }*/

    function sum(...$nums): int
    {
        return array_reduce($nums, fn($carry, $n) => $carry + $n);
    }

    echo sum(1, 2, 3, 4, 5, 6);

    function one($name): void
    {
        echo "<br>"."Hello $name"."<br>";
    }

    one("Max");

    function two($age): int
    {
        return $age;
    }

    echo two(23);

    function three($greeting): string
    {
        return "<br>".$greeting."<br>";
    }

    echo three("Huhu");

    $fruits = ["Banana, Apple"];
    function four($arr): array
    {
        return $arr;
    }
   var_dump(four($fruits));

    echo '<br>';

    function five($x): bool
{
    return ($x>4);
}

var_dump(five(5));


?>
</body>
</html>