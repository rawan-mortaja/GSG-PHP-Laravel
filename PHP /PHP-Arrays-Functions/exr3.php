<?php

function multipArr($arr1, $arr2)
{
    $finalArr = array();
    $count = min(count($arr1), count($arr2));
    for ($i = 0; $i < $count; $i++) {
            $finalArr[] = $arr1[$i] * $arr2[$i];
        // $finalArr[] = max($arr1[$i] ,$arr2[$i]);
        
    }
    return $finalArr;
}
$arr1 = array(1, 2, 3 , 4);
$arr2 = array(3, 4, 5 , 7);

$maltupArrays = multipArr($arr1, $arr2);
echo "<pre>";
print_r($maltupArrays);
