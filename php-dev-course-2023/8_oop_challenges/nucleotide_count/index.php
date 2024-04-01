<?php

spl_autoload_register(function ($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once($path);
});

use App\DNA;

echo "<pre>";
print_r(DNA::nucleotideCount("GATTACA"));
echo "</pre>";
