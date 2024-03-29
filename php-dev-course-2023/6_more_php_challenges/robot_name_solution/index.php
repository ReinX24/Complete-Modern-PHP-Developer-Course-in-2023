<?php

declare(strict_types=1);

function getNewName(): string
{
    // Generate capital letters from A to Z and shuffle array elements
    $letters = range("A", "Z");
    shuffle($letters);

    // Generates a random randomNumber from 100 to 999 (inclusive for both)
    $randomNumber = mt_rand(100, 999);

    return "{$letters[0]}{$letters[1]}{$randomNumber}";
}

echo getNewName();
