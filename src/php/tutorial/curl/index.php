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
    $url = 'https://jsonplaceholder.typicode.com/users';
    $resource = curl_init($url);
    curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($resource);
    $info = curl_getinfo($resource, CURLINFO_HTTP_CODE);
    var_dump($info);
    echo $result;
    curl_close($resource);
?>
<body>
</html>