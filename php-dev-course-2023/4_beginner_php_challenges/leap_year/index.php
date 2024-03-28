<?php

declare(strict_types=1);

function isLeap(int $year): bool
{
    if ($year % 4 !== 0) {
        return false;
    } elseif ($year % 100 == 0 && $year % 400 != 0) {
        return false;
    } else {
        return true;
    }
}

var_dump(isLeap(1997)); // false
var_dump(isLeap(1996)); // true
var_dump(isLeap(1900)); // false
var_dump(isLeap(2000)); // true
