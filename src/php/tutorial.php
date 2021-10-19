<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
       echo "Hello World"; 
       echo '<br>';
       echo '<button>Click me</button>';
       //comment
       # comment
       /*
       multiline
       */

       $name = 'Mat';
       $age = 22;
       $isMale = false; //false doesnt print, if true prints 1
       $height = 1.85;
       $salary = null;

       echo '<br>'.$name.'<br>';
       echo $age.'<br>';
       echo $isMale.'<br>';
       echo $height.'<br>';
       echo $salary.'<br>';

       echo gettype($name).'<br>';
       echo gettype($age).'<br>';
       echo gettype($isMale).'<br>';
       echo gettype($height).'<br>';
       echo gettype($salary).'<br>';

       var_dump($name, $age, $isMale, $salary, $height);
       $name = false;
       echo gettype($name).'<br>';

       is_string($name); // false
       is_int($age); // true
       is_bool($isMale);
       is_double($height);

       isset($name); // true
       isset($address); //false
       var_dump(isset($address));

       define('PI', 3.14);
       echo PI.'<br>';

       echo SORT_ASC.'<br>';
       echo PHP_INT_MAX.'<br>';

       $a = 5;
       $b = 4;
       $c = 1.2;

       echo $a + $b * $c.'<br>';
       echo ($a + $b) * $c.'<br>';

       $a += $b; echo $a.'<br>';

       echo $a++.'<br>'; 
       echo ++$a.'<br>';

      $strNum = '12.34';
      $num = (float)$strNum;
      var_dump($num);

      echo '<br>';
      $fruits = ["banana", "apple", "orange"];
      var_dump($fruits);

    $veggies = ["potato", "cucumber"];

    echo '<pre>';
    var_dump(array_merge($fruits, $veggies));
    var_dump([...$fruits, ...$veggies]);
    echo '</pre>';

    sort($fruits);
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    $person = [
        'name' => 'Max',
        'surname' => 'Müller',
        'age' => 30,
        'hobbies' => ['Tennis', 'Video Games']
    ];

    echo '<pre>';
    print_r($person);
    echo '</pre>';

    echo $person['name'].'<br>';

    $person['job'] = 'teacher';
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

    $person['address'] ??= 'unknown';
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

    echo '<pre>';
    var_dump(array_keys($person));
    echo '</pre>';

    ?>
</body>
</html>