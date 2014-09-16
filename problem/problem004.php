<?php

require '../show_answer.php';

$startTime = microtime(true);

$palindroms = [];
for ($i = 100; $i <= 999; $i++) {
    for($j = 100; $j <= 999; $j++) {
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
