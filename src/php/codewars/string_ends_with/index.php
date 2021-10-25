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

// Teste ob ein String auf einen bestimmten Substring endet
<?php
    function solution($str, $ending)
    {
        if(str_ends_with($str, $ending)) {
            return true;
        }
    }
?>
</body>
</html>