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
function likes($arr)
{
    $arrSize = count($arr);

    if ($arrSize == 0) {
        echo "no one likes this";
    } elseif ($arrSize == 1) {
        $name1 = $arr[1];
        echo $name1." likes this";
    } elseif ($arrSIze == 2) {
        $name1 = $arr[1];
        $name2 = $arr[2];
        echo $name1." and ".$name2." like this";
    } elseif ($arrSize == 3) {
        $name1 = $arr[1];
        $name2 = $arr[2];
        $name3 = $arr[3];
        echo $name1.", ".$name2." and ".$name3." like this";
    } elseif ($arrSize == 4) {
        $name1 = $arr[1];
        $name2 = $arr[2];
        echo $name1.", ".$name2." and 2 others like this";
    }
}
likes(["Peter"]);

?>

</body>
</html>
