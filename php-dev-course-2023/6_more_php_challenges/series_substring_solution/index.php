<?php

declare(strict_types=1);

function slices(string $series, int $size): array
{
    $seriesLength = strlen($series);

    if ($size > $seriesLength || $size < 1) {
        return [];
    }

    $results = [];

    for ($i = 0; $i <= $seriesLength - $size; $i++) {
        array_push($results, substr($series, $i, $size));
    }

    return $results;
}

echo "<pre>";
print_r(slices("49142", 3));
// print_r(slices("49142", 4));
// print_r(slices("49142", 6));
echo "</pre>";
