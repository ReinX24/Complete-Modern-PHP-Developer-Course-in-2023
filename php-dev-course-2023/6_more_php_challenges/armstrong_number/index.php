<?php

declare(strict_types=1);

function isArmstrongNumber(int $paraNum): bool
{
    $numberArr = str_split((string) $paraNum);

    $powerNum = count($numberArr);

    // Raises each element in $numberArr by $powerNum and returns an array
    $numberArr = array_map(function ($eachNum) use ($powerNum) {
        return $eachNum ** $powerNum;
    }, $numberArr);

    // $totalNum = 0;
    // foreach ($numberArr as $eachNumber) {
    //     $totalNum += pow((int) $eachNumber, $powerNum);
    // }

    return array_sum($numberArr) === $paraNum;
}

echo var_dump(isArmstrongNumber(9)) . "<br>"; // true
echo var_dump(isArmstrongNumber(10)) . "<br>"; // false
echo var_dump(isArmstrongNumber(153)) . "<br>"; // true
echo var_dump(isArmstrongNumber(154)) . "<br>"; // false
