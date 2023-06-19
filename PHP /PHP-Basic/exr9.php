<?php 

function reverseString($string){
    $reversed = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) { 
        $reversed .= $string[$i];
    }
    return $reversed;

}

$string1 = "Rawan";
$result = reverseString($string1);
echo "$string1: $result";