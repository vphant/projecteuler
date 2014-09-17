<?php

// ini_set('xdebug.var_display_max_depth', 10);

/**
 * Lattice paths
 * https://projecteuler.net/problem=15
 */

require '../show_answer.php';

$startTime = microtime(true);

$grid = initGrid(10);
$result = makePathTree($grid);

showAnswer($result, $startTime);

function initGrid($size)
{
    $grid = [];
    for ($i = 1; $i <= $size + 1; $i++) {
        for ($j = 1; $j <= $size + 1; $j++) {
            $grid[$i][$j] = '';
        }
    }

    return $grid;
}

function makePathTree($grid)
{
    $x = 1;
    $y = 1;

    $score = 0;
    $tree = [
        getChildren($grid, $x, $y, $score)
    ];

    return $score;
}


function getChildren($grid, $x, $y, &$score)
{
    $children = false;

    if (isset($grid[$x][$y + 1])) {
        $children[] =
            [
                getChildren($grid, $x, $y + 1, $score)
            ];
    }

    if (isset($grid[$x + 1][$y])) {
        $children[] =
            [
                getChildren($grid, $x + 1, $y, $score)
            ];
    }

    if ($children === false) {
        $score++;
    }

    return $children;
}

