<?php

$users = ["John", "Jane", "Bob", null];

// Add elements to an array
$users = array_merge(
    $users,
    ["Sam", "Jessica"]
);

// sort($users); // reindexes array
asort($users); // does not reindex the array

// Makes all elements in the array uppercase
// $users = array_map(
//     fn ($user) => strtoupper($user),
//     $users
// );

// Removes elements that are "Bob"
// $users = array_filter(
//     $users,
//     fn ($user) => $user !== "Bob"
// );

// Reindexing values since array_filter does not reset indexes
// $users = array_values($users);

echo "<pre>";
print_r($users);
echo "</pre>";

// if (array_key_exists(3, $users)) {
//     echo "User found!";
// }

// if (isset($users[3])) {
//     echo "User found!";
// }
