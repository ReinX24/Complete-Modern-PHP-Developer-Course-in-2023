<?php

// This function accepts an infinite amount of parameters
function sum(bool $dumpArr, int|float ...$nums)
{
    if ($dumpArr) {
        var_dump($nums);
    }
    return array_sum($nums); // returns the sum of all the array elements
}

echo sum(false, 5, 2, 9, 1);
