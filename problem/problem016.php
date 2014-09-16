<?php

require '../show_answer.php';

$startTime = microtime(true);

$inPow = 0.00;
$inPow = gmp_pow(2, 1000);
$inPowString = gmp_strval($inPow);

$length = strlen($inPowString);
$digits = [];

for ($i = 0; $i < $length; $i++) {
    $digits[] = $inPowString[$i];
}

$result = 0;
foreach ($digits as $digit) {
    $result += (int)$digit;
}

showAnswer($result, $startTime);
