<?php

function StartsWithGo($string)
{
    $prefix = "GO";

    if (strlen($string) < strlen($prefix)) {
        return false;
    }
    for ($i = 0; $i < strlen($prefix); $i++) {
        if ($string[$i] !== $prefix[$i]) {
            return false;
        }
    }
    return true;
}

$string1 = "GOlang";
$result1 = StartsWithGo($string1);
echo "$string1" . " " . ($result1 ? "TRUE" : "FALSE");
