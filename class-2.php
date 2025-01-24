<?php 

    /**
    * 
    * PHP Syntax
    * PHP Variable
    * PHP Echo or Print
    * PHP Data Types (String, Number, Boolean, Array, Object)
    * Conditional Statement (equal, equal or greater, equal or less)
    
    */


    // Integer
    // Float
    // Double

    $name = "I'm PHP";

    $class_name = 'PHP';
    $heading = "Welcome to $class_name class";

    // echo $heading;

    $first_number = 10;
    $second_number = 2;
    $sum = $first_number + $second_number;
    
    // echo $sum;

    $sub = $first_number - $second_number;

    // echo "Subtract is : " . $sub;

    $div = $first_number / $second_number;

    // echo $div;

    $reminder = $first_number % $second_number;

    // echo $reminder;


    // if($reminder == 0) {
    //     echo "There is no reminder";
    // } else {
    //     echo "Reminder is : $reminder";
    // }

    // $message = $reminder == 0 ? "There is no reminder" : "Reminder is : $reminder";

    // echo $message;

    $number = 0;

    // if($number >= 10) {
    //     echo "Number is 10 or above";
    // }

    if($number <= 10) {
        echo "Equal or below 10";
    }

?>