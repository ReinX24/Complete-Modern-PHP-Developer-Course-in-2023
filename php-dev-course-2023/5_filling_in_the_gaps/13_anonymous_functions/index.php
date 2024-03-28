<?php

$multiplier = 2;

// use ($variable) copies a variable outside of the function
// $multiply = function ($num) use ($multiplier) {
//     $multiplier = 5;
//     return $num * $multiplier;
// };

// Arrow function
$multiply = fn ($num) => $num * $multiplier;

function sum($a, $b, $callback)
{
    return $callback($a + $b);
}

echo sum(5, 2, $multiply);

echo "<br> {$multiplier}";
