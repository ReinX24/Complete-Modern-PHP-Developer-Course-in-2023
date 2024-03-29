<?php

declare(strict_types=1);

function getNewName(): string
{
    $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    $randomLetters = array_rand($letters, 2);
    $randomNumbers = array_rand($numbers, 3);

    $resultName = $letters[$randomLetters[0]] .
        $letters[$randomLetters[1]] .
        $numbers[$randomNumbers[0]] .
        $numbers[$randomNumbers[1]] .
        $numbers[$randomNumbers[2]];

    // TODO: use range function
    $test = range("A", "Z");

    return $resultName;
}

echo getNewName();
