<?php
    $str1 = 'First';
    $str2 = 'Name';
    $name = 'CAP';
    $low = 'low';

    echo $str1.$str2;
    echo "In \" \\ we can escape and in  these double quotes we can call variable like  $name\"  $low";
    echo $name[2];
    echo strlen($str1);
    echo strtoupper($low);
    echo strtolower($name);
    echo str_replace('N','f',$str2);

?>

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

</body>
</html>
