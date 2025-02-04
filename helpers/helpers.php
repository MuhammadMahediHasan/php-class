<?php

function arraySum($array) {

    $result = 0;
    for($i = 0; $i < count($array); $i++) {
        $result += $array[$i];
    }

    /**
     * i = 0, value = 2, result = 2;
     * i = 1, value = 3, result = 5;
     * i = 2, value = 4, result = 9;
     * i = 3, value = 6, result = 15;
     * 
     */

    return $result;
}

function getReminder($first, $second) {
    return $first % $second;
}

function varDump($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function multiplier($number) {
    for($i = 1; $i <=10; $i++) {
        
        $result = $number * $i;

        echo "$number x $i = $result <br>";

    }
} 
