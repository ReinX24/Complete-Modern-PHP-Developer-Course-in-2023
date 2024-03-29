<?php

$nums = ["example" => 5, 3, 9, 11];

// Destructuring arrays, assigns the array elements to a variable

// Assigns element with "example" key to a variable, also set another element
// with the 0 key (first index) to a variable.
["example" => $a, 0 => $b] = $nums;

// Places first element in $a and the second element in $b
// [$a, $b] = $nums;

// list($a, $b) = $nums;

echo $a;
echo $b;
