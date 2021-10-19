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
    function  hello($name) {
        echo "Hello I am $name";
    }

    hello("Saskia");
    hello('Brad');

    echo '<br>';

    /*function sum(...$numbers) {

        $summe = 0;
        for ($i = 0; $i < 6; $i++) {
            $summe += $numbers[$i];
        }
        return $summe;
    }*/

    /*function sum(...$numbers) {
        $sum = 0;
        foreach($numbers as $n) {
            $sum += $n;
        }
        return $sum;
    }*/

    function sum(...$nums) {
        return array_reduce($nums, fn($carry, $n) => $carry + $n);
    }

    echo sum(1, 2, 3, 4, 5, 6);
?>
</body>
</html>