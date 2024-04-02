<?php

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

use App\School;

$mySchool = new School();

$mySchool->add("Anna", 1);
$mySchool->add("Bob", 1);
$mySchool->add("Charlie", 1);
print_r($mySchool->grade(1));

echo "<br>";

$mySchool->add("Alex", 2);
$mySchool->add("Peter", 2);
$mySchool->add("Zoe", 2);
print_r($mySchool->grade(2));

echo "<br>";

$mySchool->add("Jim", 3);
print_r($mySchool->grade(3));

echo "<br>";

echo "<pre>";
print_r($mySchool->studentsByGradeAlphabetically());
echo "</pre>";
