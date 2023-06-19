<?php
$num1 = 95;
$num2 = 105;

if ($num1 == $num2) {
    $nearestTo100 = 0;
} else {
    $diff1 = abs(100 - $num1);
    $diff2 = abs(100 - $num2);

    if ($diff1 < $diff2) {
        $nearestTo100 = $num1;
    } else {
        $nearestTo100 = $num2;
    }
}

if ($nearestTo100 !== 0) {
    echo "The number nearest to 100 between $num1 and $num2 is $nearestTo100.";
} else {
    echo "Both $num1 and $num2 are equal.";
}
?>
