<?php

/**
 * Largest palindrome product
 * https://projecteuler.net/problem=4
 */

require '../show_answer.php';

$startTime = microtime(true);

$palindroms = [];
for ($i = 100; $i <= 999; $i++) {
    for($j = $i; $j <= 999; $j++) {
        $production = $i * $j;
        if (isPalindrome($production)) {
            $palindroms[] = $production;
        }
    }
}

$result = max($palindroms);

showAnswer($result, $startTime);

function isPalindrome($value)
{
    return $value == strrev($value);
}
