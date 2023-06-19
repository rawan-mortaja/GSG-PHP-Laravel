<?php

function calculateFactorial($number) {
    if ($number < 0) {
        return "Invalid input";
    }
    $factorial = 1;
    
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
$number = 5;
$result = calculateFactorial($number);

echo  $number . " is: " . $result ;