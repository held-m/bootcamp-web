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
    $age = 20;
    $salary = 300000;

    if ($age === 20) {
        echo "1";
    }
    //same as:
    if ($age === 20) echo "1";

    if ($age > 20) {
        echo "1";
    } else {
        echo "2";
    }

    echo '<br>';
    echo $age < 22 ? 'jung' : 'alt';

    $myAge = $age ?: 18;
    echo $myAge;

    echo '<br>';
    $myName = $name ?? 'John';
    echo $myName;


    echo '<br>';

    $userRole = 'admin';
    switch ($userRole) {
        case 'admin':
            echo 'admin';
            break;
        case 'editor':
            echo 'editor';
            break;
        case 'user':
            echo 'user';
            break;
        default:
            echo 'Invalid role';
    }
?>
</body>
</html>