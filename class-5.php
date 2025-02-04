<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="number" >
        <button>Submit</button>
    </form>
</body>
</html>


<!-- PHP -->
<?php

    include "./helpers/helpers.php";

    $numbers = [2, 3, 4, 6];

    $sum = arraySum($numbers);

    // echo $sum;

    $array1 = [10, 20];
    $array2 = [40, 50];

    $array = array_merge($array1, $array2);

    //varDump($array);

    $title = "this is a title!";

    // echo strlen($title);

    // multiplier(7);

    // HTTP verb, method (POST, GET)

    $number = $_GET['number'];

    multiplier($number);

    varDump($_SERVER);

?>