<?php

function showAnswer($answer, $startTime)
{
    $endTime = microtime(true);
    $diff = $endTime - $startTime;

    printf(
        'Answer: %s<br/>
         Time elapsed: %s <br/>
         Less then a minute: %s'
        ,
        $answer,
        $diff,
        $diff < 60 ? '<span style="color:darkgreen;">yes</span>' : '<span style="color:red;">no</span>'
    );
}
