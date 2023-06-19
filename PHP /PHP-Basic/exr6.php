<?php
$num1 = 15;
$num2 = 35;

if ($num1 > 0 && $num2 > 0) {
    $largerValue = ($num1 > $num2) ? $num1 : $num2;

    if ($largerValue >= 20 && $largerValue <= 30) {
        $result = $largerValue;
    } else {
        $result = 0;
    }
} else {
    $result = 0;
}

if ($result !== 0) {
    echo "The larger value between $num1 and $num2 that is in the range 20-30 inclusive is $result.";
} else {
    echo "Neither $num1 nor $num2 is in the range 20-30 inclusive.";
}
?>
