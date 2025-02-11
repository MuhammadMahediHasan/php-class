<?php

    // $number = 100;

    // for($i = 1; $i <=10; $i++) {
        
    //     $result = $number * $i;

    //     echo "$number x $i = $result <br>";

    // }


    // if($number < 0) {
    //     echo "$number is a negative number";
    // } else {
    //     echo "$number is a positive number";
    // }


    // $reminder = $number % 2;
    // if($reminder == 0) {
    //     echo "$number is an even number";
    // } else {
    //     echo "$number is an odd number";
    // }


    $firstNumber = 10;
    $secondNumber = 15;
    $thirdNumber = 7;

    // if($firstNumber > $secondNumber) {
    //     echo "$firstNumber is largest";
    // } else {
    //     echo "$firstNumber is smallest";
    // }


    // and true and true
    // or true or false

    // if($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
    //     echo "First number is largest";
    // } else if($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
    //     echo "Second number is largest";
    // } else {
    //     echo "Third number is largest";
    // }

    

    //          0,  1, 2, 3,   4, 5, 6, 7, 8,   9
    $numbers = [2, 20, 5, 20, 40, 1, 3, 9, 50, 60];

    //var_dump(array_key_first($numbers));

    // echo $numbers[4];

    // $largest = 0;
    // for($index = 0; $index < count($numbers); $index++) {
    //     //echo "$index - $numbers[$index] <br>";

    //     $isLargest = $largest < $numbers[$index];

    //     if($isLargest) {
    //         $largest = $numbers[$index];
    //     } else {
    //         continue;
    //     }
    // }

    // echo "Largest number is $largest";

    // function sum($firstNumber, $secondNumber) {
    //     $result = $firstNumber + $secondNumber;

    //     return $result;
    // }

    // $sum = sum(10, 40);

    // $result = sum(50, 50);

    // echo $result;

    function multiplier($number) {
        for($i = 1; $i <=10; $i++) {
            
            $result = $number * $i;

            echo "$number x $i = $result <br>";

        }
    } 


    multiplier(7);