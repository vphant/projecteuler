<?php

/**
 * Even Fibonacci numbers
 * https://projecteuler.net/problem=2
 */

require '../show_answer.php';

$startTime = microtime(true);

$prevprev = 1;
$prev = 2;

$current = 0;
$result = 2;
while ($current < 4000000) {
    $current = $prevprev + $prev;
    $prevprev = $prev;
    $prev = $current;

    if ($current % 2 == 0) {
        $result += $current;
    }
}

showAnswer($result, $startTime);
