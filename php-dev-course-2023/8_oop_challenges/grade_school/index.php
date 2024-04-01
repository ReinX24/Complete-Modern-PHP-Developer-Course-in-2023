<?php

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

use App\School;

$school = new School();

$school->add("Anna", 1);
$school->add("Barb", 1);
$school->add("Charlie", 1);
print_r($school->grade(1));

echo "<br>";

$school->add("Alex", 2);
$school->add("Peter", 2);
$school->add("Zoe", 2);
print_r($school->grade(2));

echo "<br>";

$school->add("Jim", 5);
print_r($school->grade(5));

echo "<br>";

echo "<pre>";
print_r($school->studentByGradeAlphabetical());
echo "</pre>";
