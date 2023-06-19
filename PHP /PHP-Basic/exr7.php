<?php
function countd($string) {
    $digitOccurrences = array_fill(0, 10, 0);
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (is_numeric($char)) {
            $digit = intval($char);
            $digitOccurrences[$digit]++;
        }
    }

    return $digitOccurrences;
}

$string = "11232554544";
$occurrences = countd($string);

for ($i = 0; $i < 10; $i++) {
    echo "The digit $i occurs {$occurrences[$i]} time(s) in the string. "."<br>";
}
?>
