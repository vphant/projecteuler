<?php

/**
 * Multiples of 3 and 5
 * https://projecteuler.net/problem=1
 */

require '../show_answer.php';

$startTime = microtime(true);

$result = 0;

for ($i = 3; $i < 1000; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $result += $i;
    }
}

showAnswer($result, $startTime);
