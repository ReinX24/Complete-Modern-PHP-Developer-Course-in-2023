<?php

$multiplier = 2;

$multiply = fn ($num) => $num * $multiplier;

function anotherMultiply($num)
{
    return $num * 2;
}

function sum(int|float $a, int|float $b, callable $callback)
{
    return $callback($a + $b);
}

// echo sum(5, 2, fn ($num) => $num * $multiplier);
echo sum(5, 2, "anotherMultiply");

echo "<br> {$multiplier}";
