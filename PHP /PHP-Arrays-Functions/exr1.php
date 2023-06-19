<?php 
function removeOdd($array) {
    $arr = array();
    
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $arr[] = $number;
        }
    }
    
    return $arr;
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9 , 10);
$res = removeOdd($numbers);

echo "<pre>";
print_r($res);