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

// Instructions: You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.
//Implement the function which takes an array containing the names of people that like an item. It must return the display text as shown in the examples: []                                -->  "no one likes this"
//["Peter"]                         -->  "Peter likes this"
//["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
//["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
//["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"

//mit if..else:
/*function likes($arr)
{
    $arrSize = count($arr);

    if ($arrSize == 0) {
        echo "no one likes this";
    } elseif ($arrSize == 1) {
        $name1 = $arr[0];
        echo $name1." likes this";
    } elseif ($arrSize == 2) {
        $name1 = $arr[0];
        $name2 = $arr[1];
        echo $name1." and ".$name2." like this";
    } elseif ($arrSize == 3) {
        $name1 = $arr[0];
        $name2 = $arr[1];
        $name3 = $arr[2];
        echo $name1.", ".$name2." and ".$name3." like this";
    } elseif ($arrSize == 4) {
        $name1 = $arr[0];
        $name2 = $arr[1];
        echo $name1.", ".$name2." and 2 others like this";
    }
}
likes([]);
*/

//mit switch:
function likes(array $arr)
{
    $arrSize = count($arr);

    switch ($arrSize) {
        case 0:
            return "no one likes this";
            break;
        case 1:
            $name1 = $arr[0];
            return $name1 . " likes this";
            break;
        case 2:
            $name1 = $arr[0];
            $name2 = $arr[1];
            return $name1 . " and " . $name2 . " like this";
            break;
        case 3:
            $name1 = $arr[0];
            $name2 = $arr[1];
            $name3 = $arr[2];
            return $name1 . ", " . $name2 . " and " . $name3 . " like this";
            break;
        case $arrSize > 3:
            //foreach ($arr as $i => $name) {
                $x = $arrSize - 2;
                //$nextName = $arr[$i+1];
                //$names = $name.', '.$nextName.' and '.$x.' others like this';
                //return $names;

                //einfacher:
                return $arr[0].', '.$arr[1].' and '.$x.' others like this';

            //}
    }
}
echo likes(["Hans", "Peter", "Sit", "Kuckuck"]);


?>

</body>
</html>