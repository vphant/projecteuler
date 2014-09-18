<?php

/**
 * Lattice paths
 * https://projecteuler.net/problem=15
 */

set_time_limit(65);
require '../show_answer.php';
const SIZE = 15;

$startTime = microtime(true);

$x = 1;
$y = 1;

$score = 0;
findChildren($x, $y, $score);
$result = $score + 1;

showAnswer($result, $startTime);

function findChildren($x, $y, &$score)
{
    $children = false;

    if ($y + 1 != SIZE + 1) {
        findChildren($x, $y + 1, $score);
    }

    if ($x + 1 != SIZE + 1) {
        findChildren($x + 1, $y, $score);
    }

    if ($children === false) {
        $score++;
    }

    return $children;
}