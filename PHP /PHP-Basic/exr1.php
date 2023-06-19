<?php
    function CheckFirstLastTwoChar($string){
        if(strlen($string) < 2){
            return false;
        }
        $firstTwo =substr($string , 0 , 2);
        $lastTwo = substr($string , -2);
        
        return $firstTwo == $lastTwo ;
    }

    $string1 = "ReawsRe";
    $result1 = CheckFirstLastTwoChar($string1);
    echo "$string1" ." ". ($result1 ? "TRUE" : "FALSE" );
?>