<?php
$sum = 0;
$number = 12345;
$number = abs($number);
while ($number > 0) {
    $digit = $number % 10; 
    $sum += $digit; 
    $number = (int) ($number / 10);
}

echo "$sum";