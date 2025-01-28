<?php

// Switch Case
// Array - Index array, Associative array
// Loop - For, While, Do while

// $expression = 'Wednesday';

// switch($expression) {
//     case 'Friday':
//         echo "Friday is holiday!";
//         break;
//     case 'Saturday':
//         echo "It's saturday";
//         break;
//     case 'Sunday':
//         echo "Sunday is fun-day";
//     default:
//         echo "Nothing to say!";
// }


// switch($expression) {
//     case 'Friday':
//     case 'Saturday':
//     case 'Sunday':
//         echo "Sunday is fun-day";
//         break;
//     default:
//         echo "Nothing to say!";
// }

$days = ['Friday', 'Saturday', 'Sunday', 100];

//var_dump($days[0]);

$student = [
    'name' => 'Al-amin',
    'roll' => 1,
    'cgpa' => 4.0,
    'is_passed' => true,
    'address' => [
        'present_address' => 'Dhaka',
        'permanent_address' => 'Rangpur'
    ]
];

$number = 1;

//echo $number;

// $number++;

// $number++;

// echo $number;
// var_dump($student['address']['present_address']);

// value initialization

// $i = 1 + 2;

// for($i = 1; $i <= 100; $i++) {
//     echo $i . "Hello World" . "<br>";
// }

// $i = 1;
// while($i < 100) {
//     echo $i . "Hello World" . "<br>";
//     $i += 5;
// }

$i = 1;

// do {
//     echo $i . "Hello World" . "<br>";
//     $i++;
// } while ($i < 100);

// $v = print "Hello" . "<br>";

// echo $v;


var_dump(1 !== '2');