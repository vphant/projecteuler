<?php

/**
 * 10001st prime
 * https://projecteuler.net/problem=7
 */

require '../show_answer.php';

$startTime = microtime(true);

$number = 0;
$value = 2;
$max = 10001;

while ($number < $max) {
    if (isPrime($value)) {
        $number++;
    }

    $value++;
}

$result = $value - 1;
showAnswer($result, $startTime);

function isPrime($value)
{
    $root = sqrt($value);
    $divisor = 2;
    while ($divisor <= $root) {
        if ($value % $divisor == 0) {
            return false;
        }
        $divisor++;
    }

    return true;
}