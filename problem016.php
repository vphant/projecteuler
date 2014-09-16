<?php
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

function showAnswer($answer, $startTime)
{
    $endTime = microtime(true);
    $diff = $endTime - $startTime;

    printf(
        'Answer: %s<br/>
         Time elapsed: %s <br/>
         Less then a minute: %s'
    , $answer, $diff, $diff < 60 ? '<span style="color:darkgreen;">yes</span>' : '<span style="color:red;">no</span>');
}
