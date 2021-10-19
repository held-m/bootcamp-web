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

$counter = 0;

    while ($counter < 10) {
    echo $counter.'<br>';
    $counter++;
    }

    do {
        echo $counter1;
        $counter1++;
    } while ($counter1 < 10);

    for ($i = 0; $i < 10; $i++) {
        echo '<br>'.$i;
    }

$person = [
    'name' => 'Max',
    'surname' => 'Müller',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

    foreach ($person as $key => $value) {
        if (is_array($value)) {

            echo '<br>'.$key.': '.implode(",", $value);
        } else {

            echo '<br>'.$key.': '.$value;
        }
    }
?>

</body>
</html>