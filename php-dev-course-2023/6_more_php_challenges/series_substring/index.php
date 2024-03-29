<?php

declare(strict_types=1);

function slices(string $series, int $size): array
{
    $seriesLength = strlen($series);
    if ($size > $seriesLength || $size < 1) {
        return [];
    }

    $seriesArr = [];

    // $startNum = 0;
    // while ($startNum + $size - 1 !== strlen($series)) {
    //     array_push($seriesArr, substr($series, $startNum, $size));
    //     $startNum++;
    // }

    for ($i = 0; $i <= $seriesLength - $size; $i++) {
        array_push($seriesArr, substr($series, $i, $size));
    }

    return $seriesArr;
}

echo "<pre>";
print_r(slices("49142", 3));
// print_r(slices("49142", 4));
// print_r(slices("49142", 6));
echo "</pre>";
